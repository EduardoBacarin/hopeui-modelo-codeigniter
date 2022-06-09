<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!empty($this->session->userdata('usuario')) || $this->session->userdata('usuario')) {
			redirect('dashboard');
		}
	}
	public function index()
	{
		$data['js'] = [
			'assets/plugins/formValidation/formValidation.min.js',
			'assets/plugins/formValidation/framework/bootstrap.min.js',
			'assets/plugins/formValidation/language/pt_BR.min.js',
			'assets/plugins/momentjs/moment.min.js',
			'assets/plugins/momentjs/moment-with-locales.min.js',
			'assets/plugins/jquery-mask/dist/jquery.mask.min.js',
			'assets/plugins/sweetalert2/dist/sweetalert2.all.min.js',
			'assets/js/login.js',
			'assets/js/funcoes.js',
			'assets/js/mascaras.js'
		];

		$data['css'] = [
			'assets/css/loader.css',
			'assets/plugins/sweetalert2/dist/sweetalert2.min.css',
			'assets/plugins/formValidation/formValidation.min.css',
		];

		$this->load->view('01_login/login', $data);
	}

	public function registro()
	{
		$data['js'] = [
			'assets/plugins/formValidation/formValidation.min.js',
			'assets/plugins/formValidation/framework/bootstrap.min.js',
			'assets/plugins/formValidation/language/pt_BR.min.js',
			'assets/plugins/momentjs/moment.min.js',
			'assets/plugins/momentjs/moment-with-locales.min.js',
			'assets/plugins/jquery-mask/dist/jquery.mask.min.js',
			'assets/js/login.js',
			'assets/js/funcoes.js',
			'assets/js/mascaras.js'
		];

		$data['css'] = [
			'assets/plugins/formValidation/formValidation.min.css',
			'assets/css/loader.css'
		];

		$this->load->view('01_login/registro', $data);
	}

	public function salvar()
	{
		$this->load->model('login_model', 'login');
		if (!isset($_SESSION)) {
			session_start();
		}
		$post = $this->input->post();
		if (!empty($post)) {
			if (!empty($post['nome'])) {
				if (!empty($post['cpf'])) {
					if (!empty($post['email'])) {
						if (!empty($post['password'])) {
							if ($post['password'] == $post['confirmar_password']) {
								$senha = hash_hmac('sha256', $post['password'], KEY);
								$array = [
									'nome_usu' 		=> formata_string($post['nome'], 'nome'),
									'cpf_usu' 		=> formata_string($post['cpf'], 'numeric'),
									'email_usu' 	=> formata_string($post['email'], 'email'),
									'celular_usu' 	=> formata_string($post['celular'], 'numeric'),
									'senha_usu' 	=> $senha,
									'nivel_usu' 	=> 2,
								];
								$usuario = $this->login->inserir($array);
								if ($usuario) {
									$sessao = [
										'codigo_usu'      => $usuario,
										'nivel_usu'       => $array['nivel_usu'],
										'nome_usu'        => $array['nome_usu'],
										'cpf_usu'  		  => $array['cpf_usu'],
										'celular_usu'	  => $array['celular_usu']
									];
									$this->session->set_userdata('usuario', $sessao);
									redirect('dashboard');
									echo json_encode(array('return' => true, 'msg' => 'Ocorreu um erro no cadastro, atualize a página e tente novamente'));
								} else {
									echo json_encode(array('return' => false, 'msg' => 'Ocorreu um erro no cadastro, atualize a página e tente novamente'));
								}
							} else {
								echo json_encode(array('return' => false, 'msg' => 'As senhas se diferem, confirme-as e tente novamente'));
							}
						} else {
							echo json_encode(array('return' => false, 'msg' => 'A senha é obrigatória, complete o campo por favor'));
						}
					} else {
						echo json_encode(array('return' => false, 'msg' => 'O e-mail é obrigatório, complete o campo por favor'));
					}
				} else {
					echo json_encode(array('return' => false, 'msg' => 'O documento é obrigatório, complete o campo por favor'));
				}
			} else {
				echo json_encode(array('return' => false, 'msg' => 'O nome é obrigatório, complete o campo por favor'));
			}
		} else {
			echo json_encode(array('return' => false, 'msg' => 'Erro no cadastro, atualize e tente novamente.'));
		}
	}

	public function entrar()
	{
		$this->load->model('login_model', 'login');
		$post = $this->input->post();
		if (!isset($_SESSION)) {
			session_start();
		}
		if (!empty($post)) {
			$senha = hash_hmac('sha256', $post['password'], KEY);
			$email = formata_string($post['email'], 'email');
			$login = $this->login->login($senha, $email);
			if ($login) {
				$sessao = [
					'codigo_usu'      => $login[0]->codigo_usu,
					'nivel_usu'       => $login[0]->nivel_usu,
					'nome_usu'        => $login[0]->nome_usu,
					'cpf_usu'  		  => $login[0]->cpf_usu,
					'celular_usu'	  => $login[0]->celular_usu
				];
				$this->session->set_userdata('usuario', $sessao);
				echo json_encode(array('return' => true, 'msg' => 'Login efetuado, redirecionando...'));
			}else{
				echo json_encode(array('return' => false, 'msg' => 'Usuário ou senha não encontrados'));
			}
		}else{
			echo json_encode(array('return' => false, 'msg' => 'Os campos devem ser completos'));
		};
	}

	public function sair()
	{
		$this->session->sess_destroy();
		$this->session->set_userdata('usuario', '');
		redirect('login');
	}
}
