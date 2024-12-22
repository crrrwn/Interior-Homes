<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');
    }

	public function index() {
		$this->call->view('welcome_page');
	}
}
?>