<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Modelo_contactos extends CI_Model {
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
        public function ver() {
            $consulta=$this->db->query("Select * From contactos");
            return $consulta->result();
        }
        public function adicionar($nombre,$telefono,$email,$foto){
            $consulta=$this->db->query("INSERT INTO contactos VALUES(NULL,'$nombre','$telefono','$email','$foto')");
            redirect(base_url('contactos/ver'));
        }
        public function eliminar($id) {
            $consulta=$this->db->query("DELETE FROM contactos WHERE id = $id ");

        }
        public function editar($id, $editar="NULL", $nombre="NULL", $telefono="NULL", $email="NULL") {
            if ($editar=="NULL") {
                $consulta=$this->db->query("Select * From contactos WHERE id = $id ");
                //print_r($consulta).die();
                return $consulta->result();
            }else {
                #print_r($nombre).die();
                $consulta=$this->db->query("
                UPDATE contactos set
                nombre='$nombre',
                telefono='$telefono',
                email='$email',
                where id= '$id';
                ");
                return true;
            }
        }
        public function reportes2($id) {
           
                $consulta=$this->db->query("Select * From contactos WHERE id = $id ");
                //print_r($consulta).die();
                return $consulta->result();
            
        }
    }
?>