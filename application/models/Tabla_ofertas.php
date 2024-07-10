<?php

class Tabla_ofertas extends CI_Model {
    private $tabla = "ofertas";

    public function __construct(){
        parent::__construct();
    }//end constructor

    public function select_all(){
        $this->db->select($this->tabla.".*");
        $this->db->from($this->tabla);
        $rows = $this->db->get();
        return $rows->result();
    }//end select_all

    public function select($constraints){
        $query = $this->db->get_where($this->tabla, $constraints);
        return $query->result();
    }//end select

    public function count($constraints){
        $this->db->select($this->tabla.".id_oferta");
        $this->db->from($this->tabla);
        $this->db->where($constraints);
        return $this->db->count_all_results();;
    }//end count

    public function insert($values){
        return $this->db->insert($this->tabla, $values);
    }//end insert

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where("id_oferta", $id);
        $result = $this->db->update($this->tabla, $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end update

    public function delete($id){
        $this->db->where('id_oferta', $id);
        $result = $this->db->delete($this->tabla);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end delete

}//end class Tabla_ofertas
