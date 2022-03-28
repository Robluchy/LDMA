
const tablero = [["", "", ""], ["", "", ""], ["", "", ""]];

function startP(){
    console.log("startP");
   document.getElementById("#tabla").classList.remove("hidden");
   document.getElementById("#botones").classList.remove("hidden");
   document.getElementById("#uno").classList.add("hidden");
}

function startM(){
    console.log("startM");
    document.getElementById("#tabla").classList.remove("hidden");
    document.getElementById("#botones").classList.remove("hidden");
    document.getElementById("#uno").classList.add("hidden");
    throwM();
  
 }

function alertError() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'center-end',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'error',
        title: 'esa casilla ya esta ocupada'
      })
}

function chek() {
        if (tablero[0][0] == "X" && tablero[0][1] == "X" && tablero[0][2] == "X") {
            return true;
        }
        if (tablero[1][0] == "X" && tablero[1][1] == "X" && tablero[1][2] == "X") {
            return true;
        }
        if (tablero[2][0] == "X" && tablero[2][1] == "X" && tablero[2][2] == "X") {
            return true;
        }
        if (tablero[0][0] == "X" && tablero[1][0] == "X" && tablero[2][0] == "X") {
            return true;
        }
        if (tablero[0][1] == "X" && tablero[1][1] == "X" && tablero[2][1] == "X") {
            return true;
        }
        if (tablero[0][2] == "X" && tablero[1][2] == "X" && tablero[2][2] == "X") {
            return true;
        }
        if (tablero[0][0] == "X" && tablero[1][1] == "X" && tablero[2][2] == "X") {
            return true;
        }
        if (tablero[0][2] == "X" && tablero[1][1] == "X" && tablero[2][0] == "X") {
            return true;
        }
        if (tablero[0][0] == "O" && tablero[0][1] == "O" && tablero[0][2] == "O") {
            return true;
        }
        if (tablero[1][0] == "O" && tablero[1][1] == "O" && tablero[1][2] == "O") {
            return true;
        }
        if (tablero[2][0] == "O" && tablero[2][1] == "O" && tablero[2][2] == "O") {
            return true;
        }
        if (tablero[0][0] == "O" && tablero[1][0] == "O" && tablero[2][0] == "O") {
            return true;
        }
        if (tablero[0][1] == "O" && tablero[1][1] == "O" && tablero[2][1] == "O") {
            return true;
        }
        if (tablero[0][2] == "O" && tablero[1][2] == "O" && tablero[2][2] == "O") {
            return true;
        }
        if (tablero[0][0] == "O" && tablero[1][1] == "O" && tablero[2][2] == "O") {
            return true;
        }
        if (tablero[0][2] == "O" && tablero[1][1] == "O" && tablero[2][0] == "O") {
            return true;
        }
        return false;
}

function chekP() {
    if (chek("X")) {
        
        return true;

    }

    return false;
}

function chekM() {
    if (chek("O")) {
        return true;
    }
    return false;
}

function paint(x, y, z) {
    tablero[x][y] = z;

}

function throwM() {
    const x = Math.floor(Math.random() * 3);
    const y = Math.floor(Math.random() * 3);
    if (tablero[x][y] == "") {
        document.getElementById("celda" + x + y).innerHTML = "O";
        paint(x, y, "O");
        if (chekM()) {
            Swal.fire({
                icon: 'success',
                title: 'gano la maquina'
              })
        }
    } else {
        throwM();
    }
}

function throwP(x,y) {   
    if (tablero[x][y] == "") {
        document.getElementById("celda" + x + y).innerHTML = "X";
        paint(x, y, "X");
        if (chekP()) {
            Swal.fire({
                icon: 'success',
                title: 'ganaste a la maquina'
              })
        }
        throwM();
    } else {
        alertError();
    }
}

function reset() {
    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            tablero[i][j] = "";
            document.getElementById("celda" + i + j).innerHTML = "";
        }
    }
}