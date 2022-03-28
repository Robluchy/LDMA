

function photoRandom() {
    return Math.floor(Math.random() * 2) + 1;
}

function getElement(id) {
    return document.getElementById(id);
}

function spin() {
    let item1 = getElement('7');
    let item2 = getElement('bar');
    let item3 = getElement('heart');

    let num1 = photoRandom();
    let num2 = photoRandom();
    let num3 = photoRandom();

    item1.innerHTML = `${num1}`;
    item2.innerHTML = `${num2}`;
    item3.innerHTML = `${num3}`;

    if (num1 === num2 && num1 === num3) {
        youWin();
    } else {
        gameOver();
    }
}

function gameOver(){

    let timerInterval
        Swal.fire({
          title: '<h1>GameOver Machirulo</h1>',
          html: 'Se reiniciara en <b></b> milisegundos.',
          timer: 100000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft()
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval);
               location.reload();
          }
        }).then((result) => {
        })

}

function youWin(){
    Swal.fire({
        title: 'Has ganado, no eres un machirulo.',
        width: 600,
        padding: '3em',
        color: '#716add',
        background: '#fff url(img/trees.png)',
        backdrop: `
          rgba(0,0,123,0.4)
          url("img/nyan-cat.gif")
          left top
          no-repeat
        `
      })
      setTimeout(function () { location.reload(true); }, 9000);
}
