<?php


class usuarios {

    public $id;
    public $user;
    public $nombreUser;
    public $apellido;
    public $correo;

    public function __construct($id,$nombreUser, $nombre, $apellido,$correo) {
        $this->id     = $id;
        $this->nombreUser = $nombreUser;
        $this->nombre = $nombre;
        $this->apellido  = $apellido;
        $this->correo  = $correo;
    }

    public static function consultar() {
        include ('conexion.php');
        $consulta = "select * from usuarios";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaUsuarios = [];
        while ($usuario = mysqli_fetch_array($resultado)) {
            $listaUsuarios[] = new usuarios($usuario['id_user'], $usuario['nombreUser'], $usuario['nombre'], $usuario['apellido'],$usuario['correo']);
        }
        return $listaUsuarios;
    }

}

?>


