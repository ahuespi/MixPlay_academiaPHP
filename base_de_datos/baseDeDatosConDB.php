<?php
require_once './vendor/autoload.php';
class BaseDeDatos
{

    private $client;
    private $db;

    public function __construct()
    {
        $this->client = new MongoDB\Client("mongodb://localhost:27017");
        $this->db = $this->client->dbtesting;
    }

    public function show()
    {
        // return $this->db->getDatabaseName();
        return $this->db->getCollectionName();
    }

    public function get($id)
    {
        $read = $this->read();

        return $read[$id];

        $this->close($read);
    }
    
    public function insert($id,$nombre)
    {
        
        $read = $this->read();
        
        if(!isset($read[$id])){      
            $read[$id] = $nombre;
        }
        
        $this->close($read);
        }
        
        public function update($id,$nombre)
        {
            $read = $this->read();
            if(isset($read[$id])){
                $read[$id] = $nombre;
            }
            $this->close($read);
        }
        
        public function delete($id)
        {
            $read = $this->read();
            if(isset($read[$id])){
                unset($read[$id]);
            }
            $this->close($read);
    }

}

$db = new BaseDeDatos();
echo "Base de datos: " . $db->show() . "\n";

// $db->insert(1, "amir");
// $db->insert(2, "pepe");
// $db->insert(3, "123123123");
// $db->insert(4, "asdasd");
// $db->update(1, "sd");
// $db->update(2, "1010");
// $db->delete(1, "1010");
// $db->insert(5, "hola");
// echo $db->get(4)."\n";

