var ButtonClose = document.getElementById('ButtonClose')
var anuncio = document.getElementById('anuncioContainer')



function closeAd() {
    anuncio.style.display = "none";
}

anuncio.click(function () {
    
    if(true){
        anuncio.style.display = "none";
    }else{
        console.log('a')
    }
    
});

function onKeyDownHandler(event) {

    var codigo = event.which || event.keyCode;

    console.log("Presionada: " + codigo);
     
    if(codigo === 13){
      console.log("Tecla ENTER");
    }

    if(codigo >= 65 && codigo <= 90){
      console.log(String.fromCharCode(codigo));
    }

     
}