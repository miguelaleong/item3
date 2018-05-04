function calcular(valor1,valor2){
	var nombreCampoResultado = "resultado"+valor2;
	var valor3=parseInt(valor1)*parseInt(valor2);
	totalBilletes = document.getElementById("totalBilletes").value;
	nuevoTotalBilletes = parseInt(totalBilletes)+parseInt(valor1);
	totalMonto = document.getElementById("totalMonto").value;
	nuevoTotalMonto = parseInt(totalMonto)+parseInt(valor3);
	document.getElementById(nombreCampoResultado).value=valor3;
}

function totalizar(){
	var montos = [2,5,10,20,50,100,200,500];
	total=0;
	totalMonto = 0;
	for (var i = 7; i >= 0; i--) {
		cantBillete = parseInt(document.getElementById("valor"+montos[i]).value);
		totalBilletes = parseInt(totalBilletes) + parseInt(cantBillete);
		totalMonto += document.getElementById("valor"+montos[i]).value * montos[i];
		document.getElementById("valor"+montos[i]).value=0;
		document.getElementById("resultado"+montos[i]).value=0;

	}
	document.getElementById("totalBilletes").value=totalBilletes;
	document.getElementById("totalMonto").value=totalMonto;
}

function aceptar(){
	alert("Total Billetes " +  document.getElementById("totalBilletes").value + " Y MontoTotal " + document.getElementById("totalMonto").value);
}