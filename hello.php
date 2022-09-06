<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array(  array("0001","Razer DeathAdder V2 Pro - Genshin Impact Edition ","฿1590","img/Razer_DeathAdder_V2_Pro_Genshin_Impact_Edition.png"),
            array("0002","Razer_Basilisk_V3_Pro","฿2490","img/Razer_Basilisk_V3_Pro.png"),
            array("0003","Razer_DeathAdder_Essential_black","฿1990","img/Razer_DeathAdder_Essential_black.png"),
            array("0004","Razer_DeathAdder_Essential_white","฿1990","img/Razer_DeathAdder_Essential_white.png"),
            array("0005","Razer_Mamba_Elite","฿2190","Razer_Mamba_Elite.png"),
            array("0006","Razer_Naga_LeftHanded_Edition","฿1790","img/Razer_Naga_LeftHanded_Edition.png"),
            array("0007","Razer_Naga_Pro","฿1790","img/Razer_Naga_Pro.png"),
            array("0008","Razer_Viper_Ultimate_with_Charging_Dock_Quartz","฿2990","img/Razer_Viper_Ultimate_with_Charging_Dock_Quartz.png"),
            array("0009","Razer_ViperV2-Black","฿1790","img/Razer_ViperV2-Black.png"),
            array("0010","Razer_ViperV2-White","฿1790","img/Razer_ViperV2-White.png"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
        <td ><img src=".$products[$i][3]." width='230' height='298.5'/></td>
        </tr>";
    }

    echo '</table>';
?>

</body>
</html>