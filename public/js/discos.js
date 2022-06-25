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



let contenedordiscos = document.getElementById('contenedordiscos');
let buscador = document.getElementById('buscadordisco');

buscador.addEventListener('keyup', function(e){
            //cambiar por js moderno
        var keycode = e.keyCode || e.which;
        
        if (keycode == 13){
           
          contenedordiscos.innerHTML= "";
              
            buscardisco(buscador.value);
            
            
        
            
        }
   
});




function buscardisco(busqueda) {

    
    fetch("buscadisco/" + busqueda)
            .then((response) => response.json())
            .then((datadiscos) => {


                //console.log( (datadiscos.discos));

                for (let index = 0; index < datadiscos.discos.length; index++) {
                 
                  contenedordiscos.innerHTML += 
                
                  '<div class="column is-full-mobile is-one-third-desktop is-half-tablet">'+
             
                  '<div class="card" id="discos">'+
                   ' <div class="card-image">'+
                        '<figure class="image is-4by3">'+
                         '<img src="/storage/imagenes/'+ datadiscos.discos[index].portada +'" alt="Placeholder image">'+
                        '</figure>'+
                      '</div>'+
                      '<div class="card-content">'+
                        '<div class="media">'+
                         
                         ' <div class="media-content">'+
                            '<p class="title is-4" id="artista">'+ datadiscos.discos[index].artista +'</p>'+
                            '<p class="subtitle is-6" id="album">'+ datadiscos.discos[index].album +'</p>'+
                          '</div>'+
                        '</div>'+
                    
                        '<div class="content">'+
                          '<time id="anio">'+ datadiscos.discos[index].anio +'</time>  <br>'+
                         '<p class="calificacion"> '+ datadiscos.discos[index].calificaciones +' <i class="fas fa-star estrella"></i> </p>'+
                          '<p class="mb-3 mt-2">'+
                        
                         '</p>'+
                          '<div class="botonescard">'+
                              '<div class="">'+
                               ' <a  class="tag is-link"  href="#">#'+ datadiscos.discos[index].genero +'</a>'+
          
                              '</div>'+
          
                             '<div>'+
                              
                                  '<a target="_blank" href="'+ datadiscos.discos[index].enlace +'" class="button is-link is-outlined is-small"> '+
                                    '<span class="icon p-4">'+                         
                                   '<i class="fas fa-download"></i>'+
                                  '</span>Descargar</a>'+
                             
                                '</div>'+
                               
                          '</div>'   +
                          '<div class="columns">'+
                          
                            '<div class="column ">' +
                                                       
                            '</div>'+
                           
                          '</div>'   +         
                        '</div>'+
                      '</div>'+
                    '</div>'+
          
                  '</div>'
                  //pintar estrellas
                  if (datadiscos.discos[index].calificaciones == 1) {
                    let calificacion = document.getElementsByClassName('calificacion');
                    calificacion[index].innerHTML =                    
                    '<i class="fas fa-star estrella"></i>'
                  }
                  if (datadiscos.discos[index].calificaciones == 2) {
                    let calificacion = document.getElementsByClassName('calificacion');
                    calificacion[index].innerHTML = 
                    '<i class="fas fa-star estrella"></i>'+                    
                    '<i class="fas fa-star estrella"></i>'
                  }
                  if (datadiscos.discos[index].calificaciones == 3) {
                    let calificacion = document.getElementsByClassName('calificacion');
                    calificacion[index].innerHTML = 
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+                    
                    '<i class="fas fa-star estrella"></i>'
                  }
                  if (datadiscos.discos[index].calificaciones == 4) {
                    let calificacion = document.getElementsByClassName('calificacion');
                    calificacion[index].innerHTML = 
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'
                  }
                  if (datadiscos.discos[index].calificaciones == 5) {
                    let calificacion = document.getElementsByClassName('calificacion');
                    calificacion[index].innerHTML = 
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'+
                    '<i class="fas fa-star estrella"></i>'
                  }
               }       
                    
        });
        
      
        buscador.value="";
       
} 



