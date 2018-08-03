//Creando via javascript las miniaturas
if (document.getElementsByClassName("mySlide").length > 0){
	var contenedor = document.getElementById("indexSliderContenedor"),
		//Creo los elementos
		elemFigureLeft = document.createElement("figure"),
		elemFigureRight = document.createElement("figure"),
		elemImgLeft = document.createElement("img");
		elemImgRight = document.createElement("img");

		//Seteo los atributos de la miniatura izquierda e inserto el elemento "img" dentro del elemento "figure"
		setAttributes(elemFigureLeft, {"class": "mySlideLeft"});
		setAttributes(elemImgLeft, {"id": "mySlideLeftImg", 
									"alt": "Foto anterior"});
		elemFigureLeft.appendChild(elemImgLeft);

		//Seteo los atributos de la miniatura derecha e inserto el elemento "img" dentro del elemento "figure"
		setAttributes(elemFigureRight, {"class": "mySlideRight"});
		setAttributes(elemImgRight, {"id": "mySlideRightImg", 
									"alt": "Foto anterior"});
		elemFigureRight.appendChild(elemImgRight);

		//Inserto los elementos en el documento
		contenedor.appendChild(elemFigureLeft);
		contenedor.appendChild(elemFigureRight);
		

	function setAttributes(element, attributes) {
	  for(var key in attributes) {
	    element.setAttribute(key, attributes[key]);
	  }
	}
}