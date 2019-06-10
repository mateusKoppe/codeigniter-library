<?php
class Library extends CI_Controller {

	public function create()
	{
		if(!$this->input->post()) {
			$this->load->view('library/create');
			return;
		}

		$this->load->model('Book_model', 'book');
		$this->book->name = $this->input->post('name');

		// TODO: Handle error
		if ($this->book->save()) {
			redirect('');
		}
	}
	
}