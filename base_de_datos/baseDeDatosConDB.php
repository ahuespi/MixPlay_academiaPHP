<?php


require_once './vendor/autoload.php';
class BaseDeDatos
{

    private $client;
    private $db;
    private $userCollection;


    public function __construct()
    {
        $this->client = new MongoDB\Client("mongodb://localhost:27017");
        // echo "Connection to database successfully \n";
        $this->db = $this->client->dbtesting;
        // echo "Database mydb selected \n";
        $this->userCollection = $this->db->Users;
        // echo "Collection created succsessfully \n";
    }

    public function show()
    {
        return $this->db->getDatabaseName();

    }

    public function get($id)
    {
        $read = $this->read();

        return $read[$id];

        $this->close($read);
    }
    
    public function insert($id,$nombre)
    {
        try {
            $this->userCollection->insertOne([
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
            $this->userCollection->replaceOne ([
                '_id' => $id
            ],[
                '_id' => $id,
                'name' => $nombre
            ]);
            return true;
        } catch (\Throwable $th) {
            print_r ( $th->getMessage() );
            return false;
        }
    }
    
    public function delete($id)
    {
        $this->userCollection->deleteOne([
            'id' => $id
        ]);
    }
    public function deleteAll($id)
    {
        $this->userCollection->deleteMany([$id]);
    }

}

$db = new BaseDeDatos();
echo "Base de datos: " . $db->show() . "\n";

$db->insert(6, 'pepe');

$db->update(1, "josesin");


// $db->update(1, "sd");
// $db->update(2, "1010");
// $db->delete(2);

// $db->insert(5, "hola");
// echo $db->get(4)."\n";

