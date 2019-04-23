<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdoding extends CI_Model {
    private $table = 'doding';
    public function getDodings(){
        $query = $this->db->get($this->table);
        if($query){
            return $query->result();
        }
        return NULL;
    }
}