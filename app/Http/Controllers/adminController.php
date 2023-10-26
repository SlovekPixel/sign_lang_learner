<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\face;
use App\result;
use App\pantomime;


class adminController extends Controller
{
    public function showFaces(){

        $faces = face::all();

        return view('admin.faces', [
            'faces'=>$faces
        ]);
    }


    public function uploadDefault(){
        return view('admin.upload_default');
    }

    public function saveDefault(Request $request){
        $face = new face;

        $face->type = $request->type;

        if($request->file('default')) {

            $image = $request->file('default');
            $path = public_path('img');
            $path2 = $image->store('img');
            $image->move($path, $image->hashName());

        }
        $face->default = $path2;

        $face->save();
        return redirect()->back()->withInput();
    }




    public function uploadEmots($face_id){

        $emotions = pantomime::query()->get();

        return view('admin.upload_emots', [
            'face_id'=>$face_id,
            'emotions'=>$emotions
        ]);
    }

    public function saveEmot(Request $request){
        $pantomime = new pantomime;
        $pantomime->meaning = $request->meaning;

        if($request->file('url')) {

            $image = $request->file('url');
            $path = public_path('img');
            $path2 = $image->store('img');
            $image->move($path, $image->hashName());

        }
        $pantomime->url = $path2;

        $pantomime->save();
        return redirect()->back()->withInput();
    }


}
