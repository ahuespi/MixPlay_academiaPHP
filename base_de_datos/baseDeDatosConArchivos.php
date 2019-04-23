<?php
require_once './vendor/autoload.php';
class BaseDeDatos
{
    private $fp;

    private function read()
    {
        $this->fp = fopen("db1.txt", "r+");

        $files = file_get_contents("db1.txt");
        $array = json_decode($files, true);
        return $array;  
    }

    private function close($array)
    {
        $json = json_encode($array);

        file_put_contents("db1.txt", $json);

        fclose($this->fp);
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

$db->insert(1, "amir");
$db->insert(2, "pepe");
$db->insert(6, "JOSE");
$db->insert(3, "123123123");
$db->insert(4, "asdasd");
$db->update(1, "sd");
$db->update(2, "1010");
$db->delete(1, "1010");
$db->insert(5, "hola");

