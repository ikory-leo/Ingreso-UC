<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORMATO</title>
    </head>
    <body>
            <script>
	function Alerta(id)
	{
	var a= document.getElementById('Contraseña');
	longitud=(a.value.length)
        if(longitud>6){
            return 1;
           
        }
        alert ("la clave tiene que ser mayor de 7 caracteres");    
        return 0;
	}
</script>
<style>
#boton{
border: 5px solid powderblue;

}
.cuadro{
background-color:red;
border: 2px solid powderblue;
font-size: 15px;

    
}
.texto{
    position:relative;
top:400px;left:800px
}
</style>
<form onsubmit="return Alerta()" action="procesar.php">
        <form action="Procesar.php">
            

            <label class="texto"><div align=\"center\" >Usuario:  </label><input type="text" class="cuadro" name="Usuario" id="Usuario"></div><br>
                <label>Contraseña:  </label><input type="password" class="cuadro" name = "Contraseña" id="Contraseña"><br>
                <input type="submit" value="Aceptar" id="boton">
        
        </form>

    </body>
</html>
