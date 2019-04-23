<?php


class BaseDeDatos
{
    private $db = [];

    public function get($id) // ----> return JSON
    {
        return $this->db[$id];
    }

    public function insert($id,$nombre)
    {

        if(!isset($this->db[$id])){
            $this->db[$id] = $nombre;
        }
    }

    public function update($id,$nombre)
    {
        if(isset($this->db[$id])){
            $this->db[$id] = $nombre;
        }
    }

    public function delete($id)
    {
        if(isset($this->db[$id])){
            unset($this->db[$id]);
        }
    }
    
}

$db = new BaseDeDatos();

$db->insert("1", "amir");
// $db->delete("1");
$db->update("1", "sd");

