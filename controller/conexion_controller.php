<?php
class conexionController{
    const servername = "localhost";
    const username = "root";
    const password = "";
    const dbname = "omg";
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli(self::servername, self::username, self::password, self::dbname);
            $this->conn->set_charset("utf8");
        }catch(Exception $e){
            echo "Error de conexion: ".$e->getMessage();
        }
       
    }

    public function query($sql){
        $result = $this->conn->query($sql);
        return $result;
    }

    public function close()
    {
        $this->conn->close();
    }
}

?>