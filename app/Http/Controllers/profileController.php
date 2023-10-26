<?php

namespace App\Http\Controllers;

use App\pantomime;
use Illuminate\Http\Request;
use Auth;
use app\User;
use App\face;
use App\result;
use Hash;

class profileController extends Controller
{
    public function home()
    {

        return view('home');
    }

    public function newEmail(Request $request, User $user)
    {

        $this->validate($request, [
            'email' => 'email|required|unique:users,email'
        ]);

        $profile = User::where('id', Auth::user()->id)->get()->first();
        $profile->email = $request->email;

        $profile->save();
        return redirect()->back()->withInput();
    }

    public function newPassword(Request $request)
    {
        $profile = User::where('id', Auth::user()->id)->get()->first();

        $this->validate($request, [
            'old_password' => 'min:8|required',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);

        // если пароль не совпадает с нынешним
        if (!Hash::check($request->old_password, $profile->password)) {
            return redirect()->back()->with([
                'message' => 'Неверный пароль'
            ]);
        }
        $profile->password = $request->password;
        $request->user()->fill([

            'password' => Hash::make($request->password)

        ])->save();

        return redirect()->back()->withInput();
    }


    public function leaning()
    {
        $results = result::where('user_id', Auth::user()->id)->get();
        if (result::where('user_id', Auth::user()->id)->count() != 0) {
            $middle_result = result::where('user_id', Auth::user()->id)->sum('result') / result::where('user_id', Auth::user()->id)->count();
        } else {
            $middle_result = 0;
        }
        if (result::all()->count() != 0) {
            $all_middle_result = result::all()->sum('result') / result::all()->count();
        } else {
            $all_middle_result = 0;
        }
        $page = 'Обучение';

        return view('main', [
            'results' => $results,
            'middle_result' => $middle_result,
            'all_middle_result' => $all_middle_result,

            'page' => $page
        ]);
    }

    public function showGame()
    {

        $results = result::where('user_id', Auth::user()->id)->get();
        if (result::where('user_id', Auth::user()->id)->count() != 0) {
            $middle_result = result::where('user_id', Auth::user()->id)->sum('result') / result::where('user_id', Auth::user()->id)->count();
        } else {
            $middle_result = 0;
        }
        if (result::all()->count() != 0) {
            $all_middle_result = result::all()->sum('result') / result::all()->count();
        } else {
            $all_middle_result = 0;
        }

        $page = 'Игра';

        return view('anim', [
            'results' => $results,
            'middle_result' => $middle_result,
            'all_middle_result' => $all_middle_result,

            'page' => $page
        ]);
    }


    public function showFaces(Request $request)
    {
        $face = pantomime::query()->get()->random(1)->first();

        return $face;
    }


    public function saveResult(Request $request)
    {
        $result = new result;
        $result->user_id = Auth::user()->id;
        $result->result = $request->post('result');
        if ($result->save()) {
            return ['status' => 'okay'];
        } else {
            return ['status' => 'not okay'];
        }

    }

}
