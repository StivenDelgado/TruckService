<?php

if(!empty($_POST['usurario']) && !empty($_POST['password'])){
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  if($gamil == "stiven" && $password == "hola"){

    header("Location:  index.htm");
  }
  else{
    echo "contraseña incorrecta";
  }
  
}

?>