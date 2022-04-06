
let item1 = id('7');
let item2 = id('bar');
let item3 = id('heart');
let coin = id('coin');
let intervalo;
let intervalo1;
let intervalo2;

function random() {
    return Math.floor(Math.random() * 4);
}

function stop() {
    clearInterval(intervalo);
}
function stop1() {
    clearInterval(intervalo1);
}
function stop2() {
    clearInterval(intervalo2);
    
    checkWin();

}

function id(id) {
    return document.getElementById(id);
}

function spin1(){

    item1 = id('7');

    item1.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';

}

function spin2(){

    item2 = id('bar');

    item2.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';

}

function spin3(){

    item3 = id('heart');

    item3.src = 'img/'+  Math.floor(Math.random() * 4)+'.png';
   
}

function spin() {

    intervalo = setInterval(spin1, 100);
    setTimeout(stop, 2000);
    

    intervalo1 =setInterval(spin2, 100);
    setTimeout(stop1, 2500);

    intervalo2 =setInterval(spin3, 100);
    setTimeout(stop2, 3000);

    
    coin.innerHTML = parseInt(coin.innerHTML) - 10;
    
}

function add10() {
    coin.innerHTML = parseInt(coin.innerHTML) + 10;
}
function add25() {
    coin.innerHTML = parseInt(coin.innerHTML) + 25;
}
function add50() {
    coin.innerHTML = parseInt(coin.innerHTML) + 50;
}



function checkWin() {

    if (item1.src == item2.src && item2.src == item3.src) {
        
        if (item1.src.indexOf('0.png')>0) {
       
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'you win! +10'
              })
              add10();
        }
        
        if (item2.src.indexOf('1.png')>0){
        
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'you win! +25'
              })
              add25();
        }
        if (item3.src.indexOf('2.png')>0){
         
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: 'you win! +50'
              })
              add50();
        }

    }
}

function reset() {

    location.reload();

}

function start () {

    coin.classList.remove("hidden");

    coin.innerHTML = 500;


}

function countScore() {
    let coin = id('coin');
    coin.innerHTML = 500;

    if (coin.innerHTML == 0) {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'You lose',
            showConfirmButton: false,
            timer: 100
          })
    }

}
