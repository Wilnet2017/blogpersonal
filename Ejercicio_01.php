<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curso de Ajax</title>
	<script type="text/javascript">
		
	function ejecutarajax(){
		var conexion;
		if(window.XMLHttpRequest){
			conexion = new XMLHttpRequest();
			}
			else
			{
				conexion = new ActivexObject("Microsoft.XMLHTTP"); 
			}
			conexion.onreadystatechange=function(){
				if(conexion.readyState == 4 && conexion.status == 200)
				{
					document.getElementById("midiv").innerHTML = conexion.responseText;
				}
			}
			
			conexion.open("GET","ejemplo.txt",true);
			conexion.send();
			}
	</script>
</head>
<body>
<div id="midiv"></div>
<button type="button" onclick="ejecutarajax()">Ejecutar</button>
	
</body>
</html>