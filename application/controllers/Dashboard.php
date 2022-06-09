<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('usuario')) || $this->session->userdata('usuario') == false) {
			redirect('login');
		}
	}
	public function index()
	{
		$rodape['js'] = [
			'assets/plugins/formValidation/formValidation.min.js',
			'assets/plugins/formValidation/framework/bootstrap.min.js',
			'assets/plugins/formValidation/language/pt_BR.min.js',
			'assets/plugins/momentjs/moment.min.js',
			'assets/plugins/momentjs/moment-with-locales.min.js',
			'assets/plugins/jquery-mask/dist/jquery.mask.min.js',
			'assets/plugins/sweetalert2/dist/sweetalert2.all.min.js',
			'assets/js/dashboard.js',
			'assets/js/funcoes.js',
			'assets/js/mascaras.js'
		];

		$topo['css'] = [
			'assets/css/loader.css',
			'assets/plugins/sweetalert2/dist/sweetalert2.min.css',
			'assets/plugins/formValidation/formValidation.min.css',
		];

		$this->load->view('00_estrutura/topo', $topo);
		$this->load->view('02_dashboard/dashboard');
		$this->load->view('00_estrutura/rodape', $rodape);
	}
}
