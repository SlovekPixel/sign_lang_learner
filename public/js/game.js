//EMOTIONS SCRIPT IMAGE
//переменные
let show = 1;
let FalseCount = 0;
let TrueCount = 0;
let play = document.querySelector('.play-btn');
let stop = document.querySelector('.stop-btn');
let answerBtn = document.querySelectorAll('.add-answer-btn');
let defaultImg = document.querySelector('#defaultimg');
let playNext = document.querySelector('.play-next-btn');
show = 2


// $(document).ready(function () {
//
//     // полупрозрачные кнопки до момента старта
//     let emotionsContainer = document.querySelector('.click-emotioanls');
//     emotionsContainer.style.opacity = 0.5;
//
//     $.ajax({
//         type: "GET",
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         url: "/face",
//
//         data: {type: show},
//         dataType: "json",
//         beforeSend: function () {
//
//         },
//         success: function (msg) {
//             defaultImg.setAttribute('src', msg.default);
//             for (let i = 0; i < answerBtn.length; i++) {
//                 (function (index) {
//                     answerBtn[i].onclick = () => {
//
//                         playNext.classList.remove("unactive");
//
//                         if (play.classList.contains('disabled')) {
//                             for (let x = 0; x < answerBtn.length; x++) {
//                                 answerBtn[x].classList.remove('active');
//                                 answerBtn[index].classList.add('active');
//                             }
//                         } else {
//                             return false;
//                         }
//                     }
//                 })(i);
//
//             }
//
//             //game fucntion
//             function game() {
//                 let hero = document.querySelector('#emotion');
//                 console.log(msg)
//                 let random = Math.floor(msg.id);
//                 let heroSpeed = document.querySelector('.btn-cont.active .btn.btn-primary').getAttribute('data-speed');
//                 console.log(random)
//                 // не прозрачные кнопки
//                 emotionsContainer.style.opacity = 1;
//                 playNext.classList.add("unactive");
//
//                 hero.style.opacity = 1;
//                 hero.setAttribute('src', msg.url);
//                 hero.setAttribute('data-pantomime', msg.meaning);
//                 // msg.emotion.splice( random, 1);
//
//                 if (hero.style.opacity == 1) {
//                     setTimeout(() => {
//                         hero.style.opacity = 0;
//                         if (document.querySelector(' div#defaultimg')) {
//                             document.querySelector(' div#defaultimg p').textContent = 'Выберите ответ и нажмите продолжить';
//                         }
//                     }, 3000);
//                 }
//                 for (let x = 0; x < answerBtn.length; x++) {
//                     answerBtn[x].style.border = '';
//                     setTimeout(answerBtn[x].style.pointerEvents = '', 3000)
//                 }
//
//                 if (document.querySelector('.add-answer-btn.active')) {
//
//                     document.querySelector('.add-answer-btn.active').classList.remove('active')
//
//                 }
//
//             }//END GAME FUNC
//
//             setTimeout(endGame, 600000);
//
//
//             //проверка ответа
//             function checkAnswer() {
//                 let answer = document.querySelector('.add-answer-btn').value;
//                 console.log(answer)
//                 let hero = document.querySelector('#emotion').getAttribute('data-pantomime');
//                 console.log(hero)
//                 if (hero != null) {
//                     if (answer == hero) {
//                         document.querySelector('.add-answer-btn').style.border = '3px solid green';
//                         TrueCount = TrueCount + 1;
//                         document.querySelector('.add-answer-btn').value = ''
//                     } else {
//                         document.querySelector('.add-answer-btn').style.border = '3px solid red';
//                         FalseCount = FalseCount + 1;
//
//                     }//endif
//
//                     // for (let x = 0; x < answerBtn.length; x++) {
//                     //     answerBtn[x].style.pointerEvents = 'none';
//                     // }
//                 } else {
//                     return false;
//                 }//endif
//
//                 if (msg.meaning.length != 0) {
//                     if (document.querySelector(' div#defaultimg')) {
//                         document.querySelector(' div#defaultimg p').textContent = 'Ожидайте';
//
//                     }
//                     setTimeout(() => {
//
//                         document.querySelector('.add-answer-btn').style.border = '';
//                         document.querySelector('#emotion').removeAttribute('src');
//                         document.querySelector('#emotion').removeAttribute('data-pantomime');
//                         game()
//                     }, 2000);
//                 } else {
//                     alert('конец игры');
//                     alert(`неправильно: ${FalseCount}, правильно: ${TrueCount}, общий результат ${Math.round(100 - ((100 / (FalseCount + TrueCount)) * FalseCount))}%`);
//
//
//                     $.ajax({
//                         type: "POST",
//                         headers: {
//                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                         },
//                         url: "/result/save",
//                         dataType: "json",
//                         data: {
//                             result: 100 - ((100 / (FalseCount + TrueCount)) * FalseCount),
//                             face_id: msg.id
//
//                         },
//                         beforeSend: function () {
//
//                         },
//                         success: function (msg) {
//                             if (msg.status == 'okay') {
//                                 window.location.reload(true);
//                             } else {
//                                 return false;
//                             }
//                         },
//                         error: function () {
//                             alert('not work')
//                         },
//
//                     });//end AJAX
//
//                 }
//             }//END CHECK FUNC
//
//             //Выбор скорости
//             let btnCont = document.querySelectorAll('.btn-cont');
//             for (let i = 0; i < btnCont.length; i++) {
//                 (function (index) {
//                     btnCont[i].onclick = () => {
//                         for (let x = 0; x < btnCont.length; x++) {
//                             btnCont[x].classList.remove('active');
//                             btnCont[index].classList.add('active');
//                         }
//                     }
//                 })(i);
//             }//endfor
//
//
//             //старт
//             play.onclick = () => {
//                 play.classList.add('disabled');
//                 stop.classList.remove('disabled');
//                 playNext.classList.remove('disabled');
//                 game();
//             };
//
//             //Следующая эмоция
//
//             playNext.onclick = checkAnswer;
//
//             stop.onclick = endGame;
//
//             function endGame() {
//
//                 let GameEndResult = Math.round(100 - ((100 / (FalseCount + TrueCount)) * FalseCount));
//                 if (!GameEndResult) GameEndResult = 0;
//
//                 //alert('конец игры');
//                 alert(`Игра завершена, ваш результат: неправильно: ${FalseCount}, правильно: ${TrueCount}, общий: ${GameEndResult}%`);
//                 if (FalseCount == 0 && TrueCount == 0) {
//                     //alert('нет ответов');
//                     window.location.reload(true);
//                     return false;
//                 }
//
//                 $.ajax({
//                     type: "POST",
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                     },
//                     url: "/result/save",
//                     dataType: "json",
//                     data: {
//                         result: 100 - ((100 / (FalseCount + TrueCount)) * FalseCount),
//                         face_id: msg.id
//
//                     },
//                     beforeSend: function () {
//
//                     },
//                     success: function (msg) {
//                         if (msg.status == 'okay') {
//                             window.location.reload(true);
//                         } else {
//                             return false;
//                         }
//                     },
//                     error: function () {
//                         alert('not work')
//                     },
//
//                 });//end AJAX
//             }
//
//         },
//         error: function () {
//
//         },
//
//     });//end AJAX
//
// });//END READY

if (window.location.pathname === '/static'){
    show = 1
}else {
    show = 2
}

async function startGame() {
    let getPantomimeUrl = '/face'
    let response = await fetch(getPantomimeUrl, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    let pantomime = await response.json();
    console.log(pantomime)
    let hero = document.querySelector('#emotion')
    let defaultText = document.querySelector('#defaultimg p')
    hero.src = pantomime.url;
    hero.dataset.meaning = pantomime.meaning
    hero.style.opacity = '1'
    defaultText.textContent = 'Введите ответ'

    setTimeout(() => {
        hero.style.opacity = '0'
        playNext.classList.remove("disabled");
        stop.classList.remove("disabled");
        document.querySelector('.btn-bottom-cont').style.marginTop = '400px'
        hero.src = '';

    }, 3000)
    let answer = document.querySelector('.add-answer-btn')
    stop.style.zIndex = '999'
    stop.onclick = async function () {
        console.log(FalseCount)
        console.log(TrueCount)
        let saveResultUrl = '/result/save'
        let data = {
            result: 100 - ((100 / (FalseCount + TrueCount)) * FalseCount),
        }
        let response = await fetch(saveResultUrl, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(data)
        })
        let result = await response.json();
        let GameEndResult = Math.round(100 - ((100 / (FalseCount + TrueCount)) * FalseCount));
        alert(`Игра завершена, ваш результат: неправильно: ${FalseCount}, правильно: ${TrueCount}, общий: ${GameEndResult}%`);
        window.location.reload();
    }
    playNext.onclick = function () {
        if (answer.value) {
            if (answer.value == hero.dataset.meaning) {
                answer.style.border = '3px solid green';
                TrueCount = TrueCount + 1;
                answer.value = ''
                startGame()
            } else {
                answer.style.border = '3px solid red';
                FalseCount = FalseCount + 1;
                startGame()
            }
        } else {
            alert('ВВЕДИТЕ ОТВЕТ!')
        }
    }
}

async function startLearning() {
    let getPantomimeUrl = '/face'
    let response = await fetch(getPantomimeUrl, {
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    let pantomime = await response.json();
    let hero = document.querySelector('#emotion')
    let defaultText = document.querySelector('#defaultimg p')
    hero.src = pantomime.url;
    hero.dataset.meaning = pantomime.meaning
    hero.style.opacity = '1'
    defaultText.textContent = pantomime.meaning
    playNext.textContent = 'Следующая'
    playNext.style.marginTop = '500px'

    setTimeout(() => {
        hero.style.opacity = '0'
        playNext.classList.remove("disabled");
        hero.src = '';

    }, 3000)

    playNext.onclick = function () {
        startLearning();
    }
}


let startPlay = document.querySelector('.play-btn')

startPlay.onclick = function () {
    startPlay.classList.add('d-none')
    if (show === 2)
        startGame();
    else
        startLearning();
}





