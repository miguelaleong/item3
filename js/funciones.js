function calcular(valor1,valor2){
	var nombreCampoResultado = "resultado"+valor2;
	var valor3=parseInt(valor1)*parseInt(valor2);
	totalBilletes = document.getElementById("totalBilletes").value;
	nuevoTotalBilletes = parseInt(totalBilletes)+parseInt(valor1);
	totalMonto = document.getElementById("totalMonto").value;
	nuevoTotalMonto = parseInt(totalMonto)+parseInt(valor3);
	document.getElementById(nombreCampoResultado).value=valor3;
	document.getElementById("totalBilletes").value=nuevoTotalBilletes;
	document.getElementById("totalMonto").value=nuevoTotalMonto;
}