<?php 

    function insertar_empresas(){

        include("conexion.php");

        mysqli_query($connection,"INSERT INTO empresas(nombre,contacto,email,telefono,direccion)
        VALUES('polvoron','frank perez','polvoron@gmail.com','622012129','avd.montesilla nº5')");
        
        mysqli_close($connection);
    }

    function insertar_alumnos(){

        include("conexion.php");

        mysqli_query($connection,"INSERT INTO alumnos(nombre,apellido,dni,tipo_jornada,horario,fk_id_empresa)    
        VALUES('maria','rodrigez','29516843V','parcial','9:00h a 15:00h',4)");
        
        mysqli_close($connection);
    }


    function mostrar_empresa_alumno(){

        include("conexion.php");

        $resultado = mysqli_query($connection,"SELECT empresas.nombre, alumnos.nombre FROM empresas
        INNER JOIN alumnos ON empresas.id = alumnos.fk_id_empresa;");
        
        mysqli_close($connection);

        $array_alumnos_empresas = mysqli_fetch_all($resultado);
        
        for ($i=0; $i <count($array_alumnos_empresas) ; $i++) { 
            echo "La empresa: ".implode(" tiene contrado al alumno ",$array_alumnos_empresas[$i])."<br>";
        }
    }

    function main(){
        //insertar_alumnos();
        //insertar_empresas();
        mostrar_empresa_alumno();
    }


    main();



?>