let palabra;
let severyn = "advictoria mx-2 inline-block text-center text-4xl rounded-md border-solid border-b-4 border-black w-10";
let listaPalabras = ['classe', 'silla', 'imagen', 'severyn', 'pantalla','largo', 'Ruiseñor'];
let contFoto= 2;
let separarPalabra; 


function gameOver(){

    $(".boton").prop('disabled', true);
 

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
      setTimeout(function () { location.reload(true); }, 5000);
}

function comprobarVictoria(){

    let advictoria = $(".advictoria");
    let aderrota = "";

    for (let z = 0; z < advictoria.length; z++) {
            
        aderrota += advictoria[z].innerText;
        console.log(aderrota);
    }


    if (aderrota == palabra){
        console.log("has ganado ");
        youWin();
    }

}

function pintaPalabra(){

   palabra = listaPalabras[Math.floor(Math.random() * (listaPalabras.length+1))];
    separarPalabra = palabra.split("");
    
    let  guardarElemento = $("#texto");
    
    for (let i = 0; i < separarPalabra.length; i++) {

        guardarElemento.append(`<div class="letra${separarPalabra[i]} ${severyn}"></div>`);
        
    }

}


$(document).ready(function () {

    pintaPalabra();

    $(".boton").click(function () { 
       
        let dimeLaLetra = ($(this).text());

        $(this).prop('disabled', true);
        //extrae el texto que tenga dentro 
        if (separarPalabra.includes(dimeLaLetra)){
            
            $(`.letra${dimeLaLetra}`).text(dimeLaLetra).removeClass("border-solid border-b-4 border-black");
       
        }
        else{

            if (contFoto == 5){

                $("#foto").attr("src" , `img/a5.jpg` );
                
                gameOver();

            }else{

                $("#foto").attr("src" , `img/a${contFoto}.jpg` );
                
                contFoto++;
                
            }
        }
        comprobarVictoria();
        
    });
    
});


