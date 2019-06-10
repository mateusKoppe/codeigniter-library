<?php
class Library extends CI_Controller {

	public function index()
	{
		$this->load->model('Book_model', 'books');
		$books = $this->books->getList();
		$this->load->view('library/index', [
			'books' => $books
		]);
	}
	
	public function create()
	{
		if(!$this->input->post()) {
			$this->load->view('library/create');
			return;
		}

		$this->load->model('Book_model', 'book');
		$this->book->name = $this->input->post('name');
		$this->book->description = $this->input->post('description');

		// TODO: Handle error
		if ($this->book->save()) {
			redirect('');
		}
	}

}