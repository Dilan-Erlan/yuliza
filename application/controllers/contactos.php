<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("modelo_contactos");
    }
    public function ver()
    {
        if (empty($this->session->userdata("id"))) {
            redirect(base_url("principal/logout"));
        } else {
            $data["ver"] = $this->modelo_contactos->ver();

            //print_r($data);die();
            $this->load->view('plantilla/header');
            $this->load->view('vista_contactos', $data);
            $this->load->view('plantilla/footer');
        }
    }
    public function verAdd()
    {
        if (empty($this->session->userdata("id"))) {
            redirect(base_url("principal/logout"));
        } else {

            $this->load->view('plantilla/header');
            $this->load->view("formulario");
            $this->load->view('plantilla/footer');

        }
    }
    public function adicionar()
    {
        $nombre_img = $_FILES['upload']['name'];
        $this->guardar_archivo();
        //print_r($this->input->post());die();
        $adicionar = $this->modelo_contactos->adicionar(
            $this->input->post("nombre"),
            $this->input->post("telefono"),
            $this->input->post("email"),
            $nombre_img

        );
    }
    public function eliminar($id)
    {
        //print_r($id);die();
        $eliminar = $this->modelo_contactos->eliminar($id);
        redirect(base_url('contactos/ver'));
    }
    public function editar($id)
    {

        //print_r($id);
        if (is_numeric($id)) {
            $data["datos"] = $this->modelo_contactos->editar($id);
            //print_r($datos).die();
            if (empty($this->session->userdata("id"))) {
                redirect(base_url("principal/logout"));
            } else {
                $this->load->view('plantilla/header');
                $this->load->view('vista_editar_contactos', $data);
                $this->load->view('plantilla/footer');
            }
            if ($this->input->post("editar")) {
                //print_r($this->input->post("nombre")).die();
                $modificar = $this->modelo_contactos->editar(
                    $id,
                    $this->input->post("editar"),
                    $this->input->post("nombre"),
                    $this->input->post("telefono"),
                    $this->input->post("email")
                );
                redirect(base_url('contactos/ver'));
            }
        }
    }
    private function guardar_archivo()
    {
        $mi_archivo = 'upload';
        //    print_r($mi_archivo);die();
        $config['upload_path'] = "fotos/";
        //$config['file_name']= "nombre_archivo";
        $config['allowed_types'] = "*";
       // $config['allowed_types'] = "png";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        var_dump($this->upload->data());

    }

}
?>