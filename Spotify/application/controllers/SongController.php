<?php
/**
 * SongController
 * 
 * @boubbin
 * @version 
 */
require_once 'Zend/Controller/Action.php';
class SongController extends Zend_Controller_Action {
	/**
	 * The default action - show the home page
	 */
	
	public function indexAction() {
		// TODO Auto-generated SongController::indexAction() default action
		$this->listAction();
	}
	public function addAction() {
		// add SongController
	}
	public function deleteAction() {
		// delete SongController
	}
	public function editAction() {
		// edit SongController
	}
	public function listAction() {
		// list SongController
	}
}
