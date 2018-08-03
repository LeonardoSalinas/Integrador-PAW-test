//Creando los botones para los sliders y su contenido
if (document.getElementsByClassName("mySlide").length > 0){
  var contenedor = document.getElementById(contenedorId),
      elemButtonLeft = document.createElement("button"),
      elemButtonRight = document.createElement("button"),
      contentButtonLeft = document.createTextNode("<"),
      contentButtonRight = document.createTextNode(">");

      //Seteo el contenido a los botones (en este caso "<" y ">")
      elemButtonLeft.appendChild(contentButtonLeft);
      elemButtonRight.appendChild(contentButtonRight);

      //Seteo los atributos de los botones
      elemButtonLeft.setAttribute("class", "botonSliderIzq");
      elemButtonLeft.setAttribute("id", "botonSliderIzq");
      elemButtonRight.setAttribute("class", "botonSliderDer");
      elemButtonRight.setAttribute("id", "botonSliderDer");

      //Inserto los botones en el documento
      contenedor.appendChild(elemButtonLeft);
      contenedor.appendChild(elemButtonRight);
}


// Funciones para recorrer las imágenes de los sliders
if (document.getElementsByClassName("mySlide").length > 0){ // Estas funciones se ejecutan siempre y cuando haya slides para mostrar.
  var slideIndex = 1;
  var imgs = document.getElementsByClassName("mySlideImg");
  var imgsSrc = new Array();


  showDivs(slideIndex); // La primer slide al cargar la página es siempre la primera

  var // Comportamiento de los botones de los sliders
    botonSliderIzq = document.getElementById("botonSliderIzq"),
    botonSliderDer = document.getElementById("botonSliderDer");

    botonSliderIzq.addEventListener("click", slideBack);
    botonSliderDer.addEventListener("click", slideForward);
}

function plusDivs(n) { // Aumentar o decrementar el número de slide a mostrar
  showDivs(slideIndex += n);
}

function showDivs(n) { // Mostrar la slide correspondiente al número actual
  var slides = document.getElementsByClassName("mySlide"),
      // hasDots = false,
      hasMiniSlides = false;
      // dots = document.getElementsByClassName("dot");

  // if (dots.length > 0){ // Verifico que haya dots
  //   hasDots = true
  // } 

  if (document.getElementsByClassName("mySlideLeft").length > 0){ //Verifico que haya mini slides
    hasMiniSlides = true;
  }

  if (n > slides.length) { // La slide siguiente a la útlima es la primera
    slideIndex = 1;
  } 
  if (n < 1) { // La slide anterior a la primera es la útlima
    slideIndex = slides.length;
  } 

  if (hasMiniSlides) { // Calculo los valores de la posicion de las miniaturas (izquierda y derecha)
    var slideIndexLeft, slideIndexRight;
    if (slideIndex == 1){ 
      slideIndexLeft = slides.length;
      slideIndexRight = slideIndex + 1;
    } else if (slideIndex == slides.length){
      slideIndexLeft = slideIndex - 1;
      slideIndexRight = 1;
    } else {
      slideIndexLeft = slideIndex - 1;
      slideIndexRight = slideIndex + 1;
    }
  }

  for (var i = 0; i < slides.length; i++) { // Primero oculto todas las fotos grandes
     slides[i].style.display = "none";
     if (hasMiniSlides) {imgsSrc[i] = imgs[i].getAttribute("src");} // Aprovecho este bucle para cargar los nombres de las imágenes
  }

  slides[slideIndex-1].style.display = "block"; // Luego, muestro sólo la correspondiente
  if (hasMiniSlides){
    document.getElementById("mySlideLeftImg").setAttribute("src", imgsSrc[slideIndexLeft-1]); // Actualizo el campo "src" de la miniatura izquierda
    document.getElementById("mySlideRightImg").setAttribute("src", imgsSrc[slideIndexRight-1]); // Actualizo el campo "src" de la miniatura derecha
  }

  // if (hasDots){ // Estas funciones se ejecutan siempre y cuando haya "dots" para mostrar las imágenes
  //   for (var i = 0; i < dots.length; i++) {
  //     dots[i].className = dots[i].className.replace(" dotActive", "");
  //   }
  //   dots[slideIndex-1].className += " dotActive";
  // }    

}

function slideBack(){ // Funciones internas para llamar a la función showDivs(n) pasándole parámetros
  plusDivs(-1);
}

function slideForward(){
  plusDivs(1);
}
