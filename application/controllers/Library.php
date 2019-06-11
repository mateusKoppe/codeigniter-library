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

	public function show($id)
	{
		$this->load->model('Book_model', 'book');
		$success = $this->book->loadById($id);

		if (!$success) {
			echo "404";
			return;
		}

		$this->load->view('library/show', [
			'book' => $this->book
		]);
	}

	public function edit($id)
	{
		$this->load->model('Book_model', 'book');
		$success = $this->book->loadById($id);

		if (!$success) {
			echo "404";
			return;
		}

		if(!$this->input->post()) {
			$this->load->view('library/edit', [
				'book' => $this->book
			]);
			return;
		}

		$this->load->model('Book_model', 'book');
		$this->book->name = $this->input->post('name');
		$this->book->description = $this->input->post('description');

		// TODO: Handle error
		$success = $this->book->save();
		if ($success) {
			redirect('');
		}
	}

	public function delete($id)
	{
		$this->load->model('Book_model', 'book');
		$success = $this->book->loadById($id);

		if (!$success) {
			echo "404";
			return;
		}

		// TODO: Handle error
		$success = $this->book->delete();
		if ($success) {
			redirect('');
		}
	}

}