<?php
/**
 * SongController
 */
require_once 'Zend/Controller/Action.php';
class SongController extends Zend_Controller_Action
{
    /**
     * The default action - show the home page
     */
    public function indexAction ()
    {
        // TODO Auto-generated SongController::indexAction() default action
    }
    public function addAction() {
    	echo "MOI";
    }
}
