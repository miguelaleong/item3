<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Signika"
	rel="stylesheet">
<title>Cajero</title>
<link rel="stylesheet" type="text/css" href="css/CSS.css">
<script type="text/javascript" src="js/funciones.js"></script>
</head>
<h1 align="center" class="be-grey green large-padding">
	<b>Resumen del monto recibido</b>
</h1>
<body class="be-green grey">
	<table align="center" border="0">
		<tr>
			<th>Cantidad</th>
			<th>Valor</th>
			<th>Pesos</th>
			<th>Cantidad</th>
			<th>Valor</th>
			<th>Pesos</th>
			<th></th>
		</tr>
		<tr>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,2)></td>
			<td align="center"><img src="imagenes/2.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado2"></td>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,50)></td>
			<td align="center"><img src="imagenes/50.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado50"></td>
			<td><h2>Cantidad Total</h2></td>
		</tr>
		<tr>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,5)></td>
			<td align="center"><img src="imagenes/5.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado5">></td>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,100)></td>
			<td align="center"><img src="imagenes/100.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado100">></td>
			<td><input type="text" class="textResultado" disabled=true
				id="totalBilletes" value=0></td>
		</tr>
		<tr>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,10)></td>
			<td align="center"><img src="imagenes/10.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado10"></td>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,200)></td>
			<td align="center"><img src="imagenes/200.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado200"></td>
			<td><h2>Monto Total</h2></td>
		</tr>
		<tr>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,20)></td>
			<td align="center"><img src="imagenes/20.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado20">></td>
			<td><input type="text" class="textbox" align="center" value=0
				onchange=calcular(this.value,500)></td>
			<td align="center"><img src="imagenes/500.png" /></td>
			<td><input type="text" class="textbox" disabled=true value=0
				id="resultado500"></td>
			<td><input type="text" class="textResultado" id="totalMonto"
				disabled=true value=0></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="button" class="buttonbox"
				value="Agregar m&aacute;s Billetes"></td>
			<td colspan="3" align="center"><input type="button" class="buttonbox"
				value="Aceptar"></td>
		</tr>
	</table>
</body>
</html>