<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

    public function __construct()
    {
        // do some stuff here that affects all controllers
    }

}

class Frontend_Controller extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

}

class Backend_Controller extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        // Check admin login, etc.
    }

}

/* end file application/core/MY_Controller.php */