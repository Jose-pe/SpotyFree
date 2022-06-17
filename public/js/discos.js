//console.log('HOLA SPOTYFREE');
let contenedorgeneros = document.getElementById('contenedorgeneros');
listargeneros();
function listargeneros() {

    fetch("/listargeneros")
            .then((response) => response.json())
            .then((datageneros) => {
                for (let index = 0; index < datageneros.generos.length; index++) {
                    contenedorgeneros.innerHTML +=
                    '<a hfre="" class="tag is-link"><span>' + '#'+ datageneros.generos[index].genero  +'</span></a>'; 
                }
            });
}




let buscador = document.getElementById('buscadordisco');

buscador.addEventListener('keyup', function(e){
            //cambiar por js moderno
        var keycode = e.keyCode || e.which;
        
        if (keycode == 13){
            
            buscardisco(buscador.value);
        }
   
});




function buscardisco(busqueda) {

    
    fetch("buscadisco/" + busqueda)
            .then((response) => response.json())
            .then((datadiscos) => {
               
                console.log( (datadiscos.discos));
            
                 
                });
            
            }




