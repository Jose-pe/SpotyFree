console.log('HOLA SPOTYFREE');
let contenedorgeneros = document.getElementById('contenedorgeneros');
listargeneros();
function listargeneros() {

    fetch("/listargeneros")
            .then((response) => response.json())
            .then((datageneros) => {
                for (let index = 0; index < datageneros.generos.length; index++) {
                    contenedorgeneros.innerHTML +=
                    '<a hfre="" class="tag is-link"><span>' + '#'+ datageneros.generos[index].genero  +'</span></a>' 
                       
                      
                }
            });
}



