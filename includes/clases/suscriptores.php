<?php


class suscriptor
{


    private $estatus;
    private $email;
    private $nombre;
    public $idSuscriptor;

    /**
     * Constructor Suscriptores.
     *
     * @param string $id
     * Id del suscriptor
     * 
     */
    public function __construct($id)
    {
    }






    /**
     * Obtener
     * 
     * 
     * 
     * */
    public function getEstausSuscriptor($id)
    {
        $this->idSuscriptor = $id;
    }


    // public static function obtenerListaSuscriptores($id_registro)
    // {
    //     include 'conexion.php';

    //     if ($id_registro = 0) {
    //         try {
    //             return $conn->query('SELECT id, nombre, email, estatus FROM suscriptores');
    //         } catch (\Throwable $th) {
    //             echo 'Error!' . $th->getMessage();
    //             return false;
    //         }
    //     } else {
    //         try {
    //             return $conn->query('SELECT id, nombre, email, estatus FROM suscriptores');
    //         } catch (\Throwable $th) {
    //             echo 'Error!' . $th->getMessage();
    //             return false;
    //         }
    //     }
    // }



}
