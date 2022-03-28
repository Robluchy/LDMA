

function random() {
    return Math.floor(Math.random() * 2) + 1;
}

function id(id) {
    return document.getElementById(id);
}

function spin() {
    let item1 = id('7');
    let item2 = id('bar');
    let item3 = id('heart');

    let num1 = random();
    let num2 = random();
    let num3 = random();

    item1.src = `img/${num1}.png`;
    item2.src = `img/${num2}.png`;
    item3.src = `img/${num3}.png`;

    if (num1 === num2 && num1 === num3) {
      const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Jackpot!'
      })
    } else {
      const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'error',
        title: 'miss!'
      })
    }
}
