<?php
class Conexion{
  private static $objcon=null;
  private static $instancia=null;

  public static function obtenerInstancia()
  {
    if(self::$objcon==null)
    {
       self::$instancia= new Conexion();
       self::$objcon= mysqli_connect("localhost","root","","sanguchones20202");
       //self::$objcon= mysqli_connect("sql307.epizy.com","epiz_27354374","1ObP66uSnzwRFT","epiz_27354374_sanguchones20202");
    }
      return self::$objcon;
  }  

function __destruct()
{
	mysqli_close(Conexion::obtenerInstancia());
}
}
$rs=Conexion::obtenerInstancia();

?>