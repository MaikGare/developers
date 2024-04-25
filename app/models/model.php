<?php 

// declarar class.
class Model{
// declarar variables.
    protected $dbJson;

// declarar el construct.
    function __contruct() 
    {
        $this->dbJson = __DIR__ . "/db.json";
    }

// declarar un array que converta los datos json en php.
    function get_all_data()
    {
        $data = [];
        $json = json_decode(file_get_contents($this->dbJson));
        foreach ($json as $row) {
            $data[$row->id] = $row;
        }
        return $data;
    }

// declarar method crear task.
// declarar method ver task.
// declarar method editar task.
// declarar method eliminar task.
}
?>