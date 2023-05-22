let musica  = document.querySelector("audio");

const musicas = [
    {titulo : "land of the fire", artista : "Kordhell", src : "musicas/KORDHELL_-_LAND_OF_FIRE.mp3",img : "img/535863-land-of-fire.jpg"}
]



var imagem = document.querySelector("img")
var nomeMusic = document.querySelector(".descricao h1");
var nomeArtista = document.querySelector(".descricao i");







document.querySelector(".botao-play").addEventListener("click", function tocarMusica(){
    musica.play();
   var play =   document.querySelector(".botao-pause").style.display = "block";
   var pause =   document.querySelector(".botao-play").style.display = "none";



});





document.querySelector(".botao-pause").addEventListener("click", function pausarMusica(){
    musica.pause();
   document.querySelector(".botao-pause").style.display = "none";
   document.querySelector(".botao-play").style.display = "block";
   var duraçaoTotal = document.querySelector(".fim");

duraçaoTotal.textContent =  segundosMais(Math.floor(musica.duration))

var duraçaoTotal = document.querySelector(".fim");

duraçaoTotal.textContent =  segundosMais(Math.floor(musica.duration))



});

musica.addEventListener("timeupdate" , function musicLoading(){

var barraMusic = document.querySelector("progress")
barraMusic.style.width = Math.floor((musica.currentTime / musica.duration) * 100)  + "%";
var timeMusic = document.querySelector(".inicio")
timeMusic.textContent =  segundosMais(Math.floor(musica.currentTime))

var duraçaoTotal = document.querySelector(".fim");

duraçaoTotal.textContent =  segundosMais(Math.floor(musica.duration))


} )

function segundosMais(segundos){
    var camposMinutos = Math.floor(segundos / 60)
    var campoSegundos = segundos % 60
    if(campoSegundos < 10){
        campoSegundos = "0" + segundos
    }
  

    return camposMinutos+":"+campoSegundos

}

