<?php //Mario Puerma Cortés
include 'index.php';

$array = [];
$array[0] = array("nombre"=>"Iphone 15","PVD"=>847.42,"PVP"=>877.42,"codigo"=>"APP4680","familia"=>"smartphones");
$array[1] = array("nombre"=>"TCL 40SE","PVD"=>115,"PVP"=>129.90,"codigo"=>"TCL101","familia"=>"smartphones");
$array[2] = array("nombre"=>"ASUS ROG SWIFT OLED PG49WCD","PVD"=>1309.55,"PVP"=>1509.55,"codigo"=>"PG49WCD","familia"=>"monitores");
$array[3] = array("nombre"=>"ROG MAXIMUS Z790 APEX ENCORE","PVD"=>780,"PVP"=>828.18,"codigo"=>"ASK2857","familia"=>"placasBase");
$array[4] = array("nombre"=>"UNYKA SFX 450W","PVD"=>12,"PVP"=>16.53,"codigo"=>"UNY67","familia"=>"fuentesAlimentacion");
$array[5] = array("nombre"=>"OPPO A60","PVD"=>149,"PVP"=>179,"codigo"=>"OPP195","familia"=>"smartphones");
$array[6] = array("nombre"=>"MSI PRO MP243X","PVD"=>66.15,"PVP"=>89,"codigo"=>"MSI3808","familia"=>"monitores");
$array[7] = array("nombre"=>"TUF Gaming VG28UQL1A","PVD"=>601.25,"PVP"=>667.50,"codigo"=>"ASK1170","familia"=>"monitores"); 
$array[8] = array("nombre"=>"PRO H610M-E","PVD"=>65.85,"PVP"=>74.92,"codigo"=>"MSI3503","familia"=>"placasBase");
$array[9] = array("nombre"=>"MPG AI1300P","PVD"=>328.99,"PVP"=>358.99,"codigo"=>"MSI3621","familia"=>"fuentesAlimentacion");
$PVP = $_POST['pvp'];


// if (isset($_POST['enviar'])) {
//     if (isset($_POST['smartphones'])){
//        $smartphones = $_POST['smartphones'];
//     }if (isset($_POST['monitores'])){   
//         $monitores = $_POST['monitores'];
//     }if (isset($_POST['placasBase'])){
//         $placasBase = $_POST['placasBase'];
//     }if (isset($_POST['fuentesAlimentacion'])){
//         $fuentesAlimentacion = $_POST['fuentesAlimentacion'];
//     }else{
//         echo '<div class="alert alert-danger">Debes seleccionar al menos una opción</div>';
// }
// }

// echo $smartphones;
// echo $monitores;
// echo $placasBase;
// echo $fuentesAlimentacion;



/*$pvd = $_POST["pvd"];
$pvp = $_POST["pvp"];
$codigo = $_POST["codigo"];
$familia = $_POST["familia"];
$array[0] = array("nombre"=>$nombre,"PVD"=>$pvd,"PVP"=>$pvp,"codigo"=>$codigo,"familia"=>$familia);
$array[1] = array("nombre"=>"Iphone 15","PVD"=>847.42,"PVP"=>877.42,"codigo"=>"APP4680","familia"=>"smartphones");        
$array[2] = array("nombre"=>"TCL 40SE","PVD"=>115,"PVP"=>129.90,"codigo"=>"TCL101","familia"=>"smartphones");
$array[3] = array("nombre"=>"ASUS ROG SWIFT OLED PG49WCD","PVD"=>1309.55,"PVP"=>1509.55,"codigo"=>"PG49WCD","familia"=>"monitores");
$array[4] = array("nombre"=>"ROG MAXIMUS Z790 APEX ENCORE","PVD"=>780,"PVP"=>828.18,"codigo"=>"ASK2857","familia"=>"placasBase");        
$array[5] = array("nombre"=>"UNYKA SFX 450W","PVD"=>12,"PVP"=>16.53,"codigo"=>"UNY67","familia"=>"fuentesAlimentacion");*/        


// mostrar($array);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DWES Tarea01 Sección 2</title>
    <style> table, th, td { border-collapse: collapse; border: 1px solid black; text-align: center;  } th, td { padding: 5px; } </style>
</head>
<body>
    <table>
        
            <tr>
                    <?php echo "<table border='1'>";
                    echo "<tr><th>Nombre</th><th>PVD</th><th>PVP</th><th>Codigo</th><th>Familia</th></tr>"; ?>
            </tr>
            <?php foreach ($array as $fila): ?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endforeach; ?>    
       
    </table>
<h1>Datos de productos con PVP mayor a <?=$PVP;?></h1>
    <table>
        
        <tr> 
        <?php echo "<table border='1'>";
                    echo "<tr><th>Nombre</th><th>PVD</th><th>PVP</th><th>Codigo</th><th>Familia</th></tr>"; ?>
        </tr>
        <?php foreach ($array as $fila): ?>
            <?php if(isset($_POST['smartphones'])):?>
        <?php if ($fila['PVP']>=$PVP && $fila['familia']=='smartphones'):?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($_POST['monitores'])):?>
        <?php if ($fila['PVP']>=$PVP && $fila['familia']=='monitores'):?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endif; ?>
        <?php endif; ?>

         <?php if(isset($_POST['placasBase'])):?>
        <?php if ($fila['PVP']>=$PVP && $fila['familia']=='placasBase'):?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endif; ?>
        <?php endif; ?>
            
             <?php if(isset($_POST['fuentesAlimentacion'])):?>
        <?php if ($fila['PVP']>=$PVP && $fila['familia']=='fuentesAlimentacion'):?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($_POST['smartphones'])==false && isset($_POST['monitores'])==false && isset($_POST['placasBase'])==false && isset($_POST['fuentesAlimentacion'])==false):?>
            <?php if ($fila['PVP']>=$PVP):?>
            <tr> 
                <td><?=$fila['nombre'];?></td>
                <td><?=$fila['PVD'];?></td>
                <td><?=$fila['PVP'];?></td>
                <td><?=$fila['codigo'];?></td>
                <td><?=$fila['familia'];?></td>
            </tr>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; ?>   
   
</table>

</body>
</html>