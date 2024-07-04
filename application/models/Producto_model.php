<?php
class Producto_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_productos() {
        $query = $this->db->get('productos');
        return $query->result_array();
    }

    public function get_producto($id) {
        $query = $this->db->get_where('productos', array('id' => $id));
        return $query->row_array();
    }
}
?>
