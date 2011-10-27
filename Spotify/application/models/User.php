<?php
class User {
	private $_id;
	private $_login;
	private $_email;
	private $_password;
	private $_logins;
	public function getId() {
		return $this->_id;
	}

	public function setId($_id) {
		$this->_id = $_id;
	}

	public function getLogin() {
		return $this->_login;
	}

	public function getEmail() {
		return $this->_email;
	}

	public function getPassword() {
		return $this->_password;
	}

	public function getLogins() {
		return $this->_logins;
	}

	public function setLogin($_login) {
		$this->_login = $_login;
	}

	public function setEmail($_email) {
		$this->_email = $_email;
	}

	public function setPassword($_password) {
		$this->_password = $_password;
	}

	public function setLogins($_logins) {
		$this->_logins = $_logins;
	}
}
