<?php

class Tabla_tennis extends CI_Model {
    private $tabla = "tennis";

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
        $this->db->select($this->tabla.".id_tennis");
        $this->db->from($this->tabla);
        $this->db->where($constraints);
        return $this->db->count_all_results();;
    }//end count

    public function insert($values){
        return $this->db->insert($this->tabla, $values);
    }//end insert

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where("id_tennis", $id);
        $result = $this->db->update($this->tabla, $data);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end update

    public function delete($id){
        $this->db->where('id_tennis', $id);
        $result = $this->db->delete($this->tabla);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end delete

    public function select_tennis_todos_info_ofertas($genero=-1){//$genero ; 1=mujer1 ; 0=hombre
        $this->db->select('tennis.id_tennis,tennis.marca,tennis.modelo,tennis.genero,tennis.precio,tennis.ruta_imagen,ofertas.id_oferta');
        $this->db->from($this->tabla);
        $this->db->join('ofertas', 'tennis.id_tennis = ofertas.id_tennis', 'left');
        if($genero != -1){
            $this->db->where('tennis.genero', $genero);
        }//end if se especifica género
        $query = $this->db->get();

        return $query->result();
    }//end select_tennis_todos_info_ofertas

    public function select_tennis_con_ofertas($limite=0){
        $this->db->select('tennis.id_tennis,tennis.marca,tennis.modelo,tennis.color,tennis.genero,tennis.precio,tennis.ruta_imagen,ofertas.id_oferta,ofertas.descuento,ofertas.fin_oferta');
        $this->db->from($this->tabla);
        $this->db->join('ofertas', 'tennis.id_tennis = ofertas.id_tennis', 'inner');
        if($limite>0){
            $this->db->limit($limite);
        }
        $query = $this->db->get();

        return $query->result();
    }//end select_tennis_con_ofertas

    public function select_tennis_genero($genero=1){
        $this->db->select('tennis.id_tennis,tennis.marca,tennis.modelo,tennis.color,tennis.precio,tennis.ruta_imagen,ofertas.descuento,ofertas.fin_oferta');
        $this->db->from($this->tabla);
        $this->db->join('ofertas', 'tennis.id_tennis = ofertas.id_tennis', 'left');
        $this->db->where('tennis.genero', $genero);
        $query = $this->db->get();

        return $query->result();
    }//end select_tennis_genero

    public function select_imagen_tennis($id_tennis){
        $this->db->select('tennis.ruta_imagen');
        $this->db->from($this->tabla);
        $this->db->where('id_tennis', $id_tennis);
        $query = $this->db->get();

        return $query->result();
    }//end select_imagenes_tennis

    public function select_imagenes_tennis($marca = NULL){
        $this->db->select('tennis.ruta_imagen');
        $this->db->from($this->tabla);
        if ($marca !== NULL) {
            $this->db->where('marca', $marca);
        }
        $query = $this->db->get();

        return $query->result();
    }//end select_imagenes_tennis

    public function select_detalles_tennis($id_tennis){
        $this->db->select('tennis.*,ofertas.descuento,ofertas.fin_oferta');
        $this->db->from($this->tabla);
        $this->db->join('ofertas', 'tennis.id_tennis = ofertas.id_tennis', 'left');
        $this->db->where('tennis.id_tennis', $id_tennis);
        $resultado = $this->db->get()->result();

        if(sizeof($resultado) > 0){
            return $resultado[0];
        }//end if existe el registro
        else{
            return NULL;
        }//end else no hay resultados
    }//end select_detalles_tennis

}//end class Tabla_tennis
