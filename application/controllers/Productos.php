<?php
class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['productos'] = $this->Producto_model->get_products();
        $data['title'] = 'Listado de Productos';

        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['product'] = $this->Producto_model->get_product($id);

        if (empty($data['product'])) {
            show_404();
        }

        $data['title'] = $data['producto']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('producto/view', $data);
        $this->load->view('templates/footer');
    }
}
