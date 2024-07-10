<?php

class Tabla_usuarios extends CI_Model {
    private $tabla = "usuarios";

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

    public function insert($values){
        return $this->db->insert($this->tabla, $values);
    }//end insert

    public function update($data, $id){
        $this->db->set($data);
        $this->db->where("id_usuario", $id);
        $result = $this->db->update($this->tabla, $data);
        
        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end update

    public function delete($id){
        $this->db->where('id_usuario', $id);
        $result = $this->db->delete($this->tabla);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
    }//end delete

    public function login($email, $password) {
        $this->db->select($this->tabla.".*");
        $this->db->from($this->tabla);
        $this->db->where("email_usuario", $email);
        $this->db->where("password_usuario = SHA2('".$password."', 0)");
        $resultado = $this->db->get()->result();

        if(sizeof($resultado) > 0) {
            return $resultado[0];
        }//end of if sizeof
        else {
            return NULL;
        }//end else return null
    }//end login

    //versión return booleano
    public function existe_email($email){
        $this->db->select($this->tabla.".id_usuario");
        $this->db->from($this->tabla);
        $this->db->where("email_usuario", $email);
        $resultado = $this->db->get()->result();

        if(sizeof($resultado) > 0) {
            return TRUE;
        }//end if existe un resultado TRUE
        else {
            return FALSE;
        }//end else return FALSE
    }//end existe_email

    //versión return datos
    public function existe_email_datos($email){
        $this->db->select($this->tabla.".id_usuario");
        $this->db->from($this->tabla);
        $this->db->where("email_usuario", $email);
        $resultado = $this->db->get()->result();

        if(sizeof($resultado) > 0) {
            return $resultado[0];
        }//end if existe un resultado se manda de resultado
        else {
            return NULL;
        }//end else return NULL
    }//end existe_email

    public function actualizar_password($id, $password){
        $query = "UPDATE $this->tabla SET password_usuario=SHA2('$password', 0) WHERE id_usuario=$id";
        $result = $this->db->QUERY($query);

        if($this->db->affected_rows() > 0){
            return TRUE;
        }//end
        else {
            return FALSE;
        }
	}//end actualizar_password


}//end class Tabla_usuario
