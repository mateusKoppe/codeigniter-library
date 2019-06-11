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

    public function loadById($id) {
        $book = $this->db->get_where('books', ["id" => $id])->first_row();
        if (!$book) {
            return $book;
        }
        $this->id = $book->id;
        $this->name = $book->name;
        $this->description = $book->description;
        return $this->id;
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

        $this->db->set([
            'name' => $this->name,
            'description' => $this->description
        ]);
        $this->db->where('id', $this->id);
        $success = $this->db->update('books');
        return $success;
    }

    public function delete() {
        $success = $this->db->delete('books', ["id" => $this->id]);
        unset($this->id);
        return $success;
    }
}