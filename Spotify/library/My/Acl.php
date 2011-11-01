<?php
class My_Acl extends Zend_Acl {
  public function __construct() {
    //Add a new role called "guest"
    $this->addRole(new Zend_Acl_Role('guest'));
    $this->addRole(new Zend_Acl_Role('user'), 'guest');
    $this->addRole(new Zend_Acl_Role('admin'), 'user');
 
    //Add a resource called page
    $this->add(new Zend_Acl_Resource('page'));
 
    //Add a resource called news, which inherits page
    $this->add(new Zend_Acl_Resource('song'), 'page');
    $this->add(new Zend_Acl_Resource('user'), 'page');
    $this->add(new Zend_Acl_Resource('notification'), 'page');
 
    //Finally, we want to allow guests to view pages
    $this->allow('guest', 'page', 'view');
 
    $this->allow('user' , 'song', 'add');
    $this->allow('user' , 'song', 'edit');
    $this->allow('user' , 'song', 'delete');

    $this->allow('guest', 'user', 'add');
    $this->deny ('user' , 'user', 'add');
    $this->allow('user' , 'user', 'edit');

    $this->allow('user' , 'song', 'add');
    $this->allow('user' , 'song', 'edit');
    $this->allow('user' , 'song', 'delete');
    
  }
}
?>