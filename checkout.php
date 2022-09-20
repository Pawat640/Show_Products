<?php
session_start();
echo "<h1>สรุปรายการสินค้า</h1>";

echo "<table border=1 bordercolor='purple'><tr><th>ลำดับ</th><th>id</th><th>name</th><th>description</th><th>price</th></tr>";
    for($i=0;$i<count($_SESSION["cart"]);$i++)
    {
        $item=$_SESSION["cart"][$i];
        echo "<tr><td>".($i+1)."</td>";
        echo "<td>".$item['id']."</td>";
        echo "<td>".$item['name']."</td>";
        echo "<td>".$item['description']."</td>";
        echo "<td>".$item['price']."</td></tr>";
        $total+=$item['price'];
    }
echo "</table>";
echo "<h1>ราคาสิ้นค้า $total บาท</h1>";
?>