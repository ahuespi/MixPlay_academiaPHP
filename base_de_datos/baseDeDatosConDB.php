<?php


require_once './vendor/autoload.php';
class BaseDeDatos
{
    private $server;
    private $db;
    private $collection;


    public function __construct($db_name, $collection_name)
    {
        $this->server = new MongoDB\Client("mongodb://localhost:27017");
        
        $this->db = $this->server->selectDatabase($db_name);

        $this->collection = $this->db->$collection_name;

    }

    public function insert($id,$nombre)
    {
        try {
            $this->collection->insertOne([
                '_id' => $id,
                'name' => $nombre
            ]);
            return true;
        } catch (Exception $th) {
            return false;
        }
    }
        
    public function update ($id,$nombre)
    {
        try {
            if($this->collection->findOne(['_id' => $id])){
                $this->collection->updateOne ([
                    '_id' => $id
                ],[
                    '$set' => ['name' => $nombre]
                ]);
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    public function delete($id)
    {
        try {
            if($this->collection->findOne(['_id' => $id])){
                $this->collection->deleteOne([
                    '_id' => $id
                ]);
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function deleteAll()
    {
        try {
            $this->collection->dropIndexes();
            return true;
        } catch (\Throwable $th) {
            print_r($th->getMessage());
            return false;
        }
    }
    public function borrarDB()
    {
        $this->collection->drop();
    }

}

// $c = new BaseDeDatos('tester', 'testing');

// $c->insert(1,"hola");
// $c->insert(2,"hola");
// $c->insert(3,"hola");
// $c->insert(4,"hola");
// $c->insert(5,"hola");
// $c->update(4,"pepe");
// $c->deleteAll();