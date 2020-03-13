<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoomController extends CI_Controller {

	public function index()
	{
		return $this->slice->view('admin.room.index');
    }
    
    public function create()
	{
		return $this->slice->view('admin.room.create');
    }

    public function store()
	{
		var_dump($this->input->post('files'));
    }
}
