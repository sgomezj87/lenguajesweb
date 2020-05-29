var a = "Hola";
var b = "Adios";

document.getElementById("texto").innerHTML =  a + " " + b;
document.getElementById("tituloh1").innerHTML =  "Nuevo título";
//document.getElementById("tituloh1").style.fontSize = "80px"

document.getElementById("enviar").onclick = function clic2(){
  var varnombre = document.getElementById("nombre").value;
	var varproductos = parseInt(document.getElementById("productos").value,10);
	var varvalor = parseInt(document.getElementById("valor").value,10);
	var total = varvalor * varproductos;
	
	if (varproductos >= 5){
		total = total * 0.8;
		alert("tiene descuento por comprar más de 5 productos")
	}
	else {
		alert("No tiene descuento")
	}
	document.getElementById("texto").innerHTML = "compró " + varnombre + " y tuvo un valor de " + total;
};

var i;
var texto;

for (i=0;i<=10;i++){
 texto += "<option value='"+i+"'>"+i+"</option>";
}

document.getElementById("productos").innerHTML = texto;



document.getElementById("cambiar").onclick = function cambiarColor(){

	//activar una alerta
   	document.getElementById("alerta").style.visibility="visible";	
   	
   	//leer el color deseado
   	varcolor = document.getElementById("color").value;

   	//imprimir el color
   	document.getElementById("texto2").innerHTML = varcolor;

   	//Colorear el background
   document.getElementById("colorear").style.backgroundColor=varcolor;

    var x = document.getElementsByTagName("label");
	console.log(x.length);

	
	for (i = 0; i < x.length; i++) {
  		x[i].style.color = "red";
  		}


    var y = document.getElementsByClassName("jumbotron");
    y[0].style.backgroundColor="green";
    

     var z = document.getElementById("foto")
    for (i = 0; i < z.attributes.length; i++) {
    console.log(z.attributes[i].name + " = " + z.attributes[i].value + "<br>");
  }
  z.attributes[0].value = "imagenes/perro2.jpg";

   var w = document.getElementsByTagName("input");
   console.log("numero de input" + w.length);

   var t = w[4];
   for (i = 0; i < t.attributes.length; i++) {
    console.log(t.attributes[i].name + " = " + t.attributes[i].value + "<br>");
  }

  t.attributes[4].value = "10";
  t.attributes[0].value = "text";

/*
   */

	};