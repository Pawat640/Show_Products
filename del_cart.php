<?php
session_start();
$i = $i_GET['i'];
if(isset($_SESSION['cart'])){
    array_splice($_SESSION['cart'],$i,i);
}
?>
<script>
    window.alert('');
    window.location.replace('');
</script>