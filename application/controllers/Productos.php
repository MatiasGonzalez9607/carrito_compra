<?php
class Productos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
    }

    public function index() {
        $data['productos'] = $this->Producto_model->get_productos();
        $this->load->view('productos/index', $data);
    }

    public function view($id) {
        $data['producto'] = $this->Producto_model->get_producto($id);

        if (empty($data['producto'])) {
            show_404();
        }

        $this->load->view('productos/view', $data);
    }
}
?>
