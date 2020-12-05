<?php
require_once('pdf/vendor/autoload.php');
require_once('plantillapdf/reportes/index.php');
$css=file_get_contents('plantillapdf/reportes/style.css');
require_once('pdfcomprobante.php');
$mpdf= new \Mpdf\Mpdf([
   "format"=> "A4" 
]);
$mpdf->SetFooter('{PAGENO}');
$plantilla=getPlantilla($pedidos);
$mpdf->writeHtml($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla,\Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output("facturacomprobantepedidolossanguchonesdekike-2020.pdf","D");
?>