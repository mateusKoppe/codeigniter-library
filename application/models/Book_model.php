<?php

class Book_model extends CI_Model {
    public $id;
    public $name;
    public $description;

    public function __construct() {
        $this->load->database();
    }

    public function getList() {
        $books = $this->db->get('books');
        return $books;
    }

    public function save() {
        // TODO: Create update
        if (!$this->id) {
            $success = $this->db->insert('books', [
                'name' => $this->name,
                'description' => $this->description
            ]);
            $this->id = $this->db->insert_id();
            return $success;
        }
    }
}