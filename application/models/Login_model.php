<?php
class Login_model extends CI_Model
{

	public function inserir($dados)
	{

		$this->db->insert("usuarios", $dados);

		//print_r($this->db->last_query());exit;

		if ($this->db->insert_id() >= 1) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	public function login($senha, $email)
	{
		$this->db->select("*");
		$this->db->from("usuarios");

		$this->db->where("email_usu", $email);
		$this->db->where("senha_usu", $senha);
		$this->db->where("ativo_usu", true);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}
