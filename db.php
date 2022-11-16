<?php
    $Cedula = $_POST['Celuda'];
    $Nombre = $_POST['Nombre'];
    $Contacto = $_POST['Contacto'];
    $Direccion = $_POST['Direccion'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];


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
    

?>


?>