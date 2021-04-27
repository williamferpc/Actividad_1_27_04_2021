<?php

   define("cedula", "1098731380");
   function ImprimirDato($dato,$tipodato){
        return $tipodato.": ".$dato."<br>";
   }
   $resultado = ImprimirDato(cedula,"Id");
   echo $resultado;   
   $resultado = ImprimirDato("William Fernando Peña Corzo","Nombre");
   echo $resultado;
   $resultado = ImprimirDato("28","Edad");
   echo $resultado;
   $resultado = ImprimirDato("willi_9212@hotmail.com","Correo");
   echo $resultado;
   $resultado = ImprimirDato("1.75","Altura");
   echo $resultado;
   

?>