<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class HeadersController extends AppController
    {
	    public function initialize()
	    {
	        parent::initialize();
	        $this->loadComponent('Csrf');
	        $this->viewBuilder()->layout('default');
	        
	    }

    	public function index(){

    	}

    	public function courses(){
    		$this->viewBuilder()->layout("admin_first");
    		
    	}

    	public function coursesDetail(){

    	}
    }


?>