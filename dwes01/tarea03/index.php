<?php //Mario Puerma Cortés
// $array = array();
// $array[0] = array("nombre"=>"Iphone 15","PVD"=>847.42,"PVP"=>877.42,"codigo"=>"APP4680","familia"=>"smartphones");
// $array[1] = array("nombre"=>"TCL 40SE","PVD"=>115,"PVP"=>129.90,"codigo"=>"TCL101","familia"=>"smartphones");
// $array[2] = array("nombre"=>"ASUS ROG SWIFT OLED PG49WCD","PVD"=>1309.55,"PVP"=>1509.55,"codigo"=>"PG49WCD","familia"=>"monitores");
// $array[3] = array("nombre"=>"ROG MAXIMUS Z790 APEX ENCORE","PVD"=>780,"PVP"=>828.18,"codigo"=>"ASK2857","familia"=>"placasBase");
// $array[4] = array("nombre"=>"UNYKA SFX 450W","PVD"=>12,"PVP"=>16.53,"codigo"=>"UNY67","familia"=>"fuentesAlimentacion");
// $array[5] = array("nombre"=>"OPPO A60","PVD"=>149,"PVP"=>179,"codigo"=>"OPP195","familia"=>"smartphones");
// $array[6] = array("nombre"=>"MSI PRO MP243X","PVD"=>66.15,"PVP"=>89,"codigo"=>"MSI3808","familia"=>"monitores");
// $array[7] = array("nombre"=>"TUF Gaming VG28UQL1A","PVD"=>601.25,"PVP"=>667.50,"codigo"=>"ASK1170","familia"=>"monitores"); 
// $array[8] = array("nombre"=>"PRO H610M-E","PVD"=>65.85,"PVP"=>74.92,"codigo"=>"MSI3503","familia"=>"placasBase");
// $array[9] = array("nombre"=>"MPG AI1300P","PVD"=>328.99,"PVP"=>358.99,"codigo"=>"MSI3621","familia"=>"fuentesAlimentacion");

// function mostrar($array){
// 	echo "<table border='1'>";
// 	echo "<tr><th>Nombre</th><th>PVD</th><th>PVP</th><th>Codigo</th><th>Familia</th></tr>";
// 	foreach($array as $elemento){
// 		echo "<tr><td>".$elemento["nombre"]."</td><td>".$elemento["PVD"]."</td><td>".$elemento["PVP"]."</td><td>".$elemento["codigo"]."</td><td>".$elemento["familia"]."</td></tr>";
// 	}
// 	echo "</table>";
// }

// mostrar($array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Selección</title>
</head>
<body>
    <form action="datos.php" method="post">
        <label for="pvp">PVP mínimo:</label>
        <input type="text" name="pvp" id="pvp"><br>
        <input type="checkbox" name="smartphones" value="smartphones">Smartphones<br>
        <input type="checkbox" name="monitores" value="monitores">Monitores<br>
        <input type="checkbox" name="placasBase" value="placasBase">Placas Base<br>
        <input type="checkbox" name="fuentesAlimentacion" value="fuentesAlimentacion">Fuentes de Alimentación<br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>