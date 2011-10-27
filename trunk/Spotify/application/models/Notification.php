<?php
class Notification {
	private $_id;
	private $_songid;
	private $_userid;
	private $_checks;
	private $_notifications;
	private $_lastcheck;
	private $_lastnotification;
	public function getId() {
		return $this->_id;
	}

	public function getSongid() {
		return $this->_songid;
	}

	public function getUserid() {
		return $this->_userid;
	}

	public function getChecks() {
		return $this->_checks;
	}

	public function getNotifications() {
		return $this->_notifications;
	}

	public function getLastcheck() {
		return $this->_lastcheck;
	}

	public function getLastnotification() {
		return $this->_lastnotification;
	}

	public function setId($_id) {
		$this->_id = $_id;
	}

	public function setSongid($_songid) {
		$this->_songid = $_songid;
	}

	public function setUserid($_userid) {
		$this->_userid = $_userid;
	}

	public function setChecks($_checks) {
		$this->_checks = $_checks;
	}

	public function setNotifications($_notifications) {
		$this->_notifications = $_notifications;
	}

	public function setLastcheck($_lastcheck) {
		$this->_lastcheck = $_lastcheck;
	}

	public function setLastnotification($_lastnotification) {
		$this->_lastnotification = $_lastnotification;
	}

}
?>