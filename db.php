<?php
  include('dbconexion.php');
//base de datos 
    $Cedula = $_POST['Celuda'];
    $Nombre = $_POST['Nombre'];
    $Contacto = $_POST['Contacto'];
    $Direccion = $_POST['Direccion'];
    $Email = $_POST['Email'];
    $password = $_POST['Contraseña'];

    require('dbconexion.php');

    $conexion=mysqli_connect($db_host, $db_usuario,$db_password,$db_nombre);

    //  if (mysqli_connect_errno()){
    //      echo "<br>";
    //      echo "no se hizo la conexión";
    //      exit

    // }


    mysqli_set_charset($conexion, "utf8");

    $consulta="INSERT INTO propietario(cedula_ptr , nombre_ptr , contacto_ptr, direccion_ptr , email_ptr , contraseña_ptr) VALUES ('$Cedula', '$Nombre', '$Contacto', '$Direccion', '$Email', '$Contraseña')";

    $resultado=mysqli_query($conexion, $consulta);

 

    if($resultado==false){
        echo "<center>";
        echo "Error al insertar datos";
        echo "</center>";
    }else{
        echo "<center>";
        echo "Registro correctamente";
        echo "</center>";
    }
    if(!empty($_POST['gmail']) && !empty($_POST['password'])){
      $gmail = $_POST['gamil'];
      $password = $_POST['password'];
      if($gamil == "stiven03dg@gmail.com" && $password == "hola"){
        header("Location:  index.htm");
      }
      else{
        echo "contraseña incorrecta";
      }
      }

    }
//     session_start();

//     $_SESSION['cedula_ptr'] = false;

//     $consulta = "SELECT * 
//     FROM 'propietario' 
//     WHERE nombre_ptr= '$Nombre' ";
// $resultado=mysqli_query($conexion, $consulta);
// $consulta = mysqli_fetch_array ($consulta);

// if ($consulta)

// if (password_verify ($password, $consulta['contraseña_ptr'] ) ){

//   $_SESSION[cedula_ptr] = true;
//   $_SESSION[nombre_ptr] = $consulta['nombre_ptr'];
//   $_SESSION[contacto_ptr] = $consulta['contacto_ptr'];
//   $_SESSION[direccion_ptr] = $consulta['direccion_ptr'];
//   $_SESSION[email_ptr] = $consulta['email_ptr'];
 
//     header('Location: index.htm'); 

//     else
//     {
//       echo "Contraseña o correo incorrecto";
//     }

//     mysqli_close($conexion);
}

?>