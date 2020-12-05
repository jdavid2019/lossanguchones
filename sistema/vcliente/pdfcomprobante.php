<?php
include '../controlador/PdfController.php';
while($row=$datos->fetch_assoc()) $pedidos[]= $row;
?>