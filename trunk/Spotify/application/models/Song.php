<?php
class Song {
	private $_id;
	private $_uri;
	private $_title;
	private $_artist;
	private $_album;
	private $_length;
	private $_trackn;
	private $_discn;
	public function getId() {
		return $this->_id;
	}

	public function setId($_id) {
		$this->_id = $_id;
	}

	public function getUri() {
		return $this->_uri;
	}

	public function getTitle() {
		return $this->_title;
	}

	public function getArtist() {
		return $this->_artist;
	}

	public function getAlbum() {
		return $this->_album;
	}

	public function getLength() {
		return $this->_length;
	}

	public function getTrackn() {
		return $this->_trackn;
	}

	public function getDiscn() {
		return $this->_discn;
	}

	public function setUri($_uri) {
		$this->_uri = $_uri;
	}

	public function setTitle($_title) {
		$this->_title = $_title;
	}

	public function setArtist($_artist) {
		$this->_artist = $_artist;
	}

	public function setAlbum($_album) {
		$this->_album = $_album;
	}

	public function setLength($_length) {
		$this->_length = $_length;
	}

	public function setTrackn($_trackn) {
		$this->_trackn = $_trackn;
	}

	public function setDiscn($_discn) {
		$this->_discn = $_discn;
	}

}
?>