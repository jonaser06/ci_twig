<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller

{
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $loader = new \Twig\Loader\FilesystemLoader(APPPATH .'/views/responsive');
        $this->twig = new \Twig\Environment($loader);
    }
    
    public function test(){
        return 'Hola Mundo';
    }

}
