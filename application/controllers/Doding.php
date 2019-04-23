<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//for allow cors
header("Access-Control-Allow-Origin: *");
if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
    exit;
}
//required rest API library
require(APPPATH . '/libraries/REST_Controller.php');
require APPPATH . '/libraries/Format.php';
use Restserver\Libraries\REST_Controller;
class Doding extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Mdoding');
    }
    // must end with _method
    public function dodings_get(){
        $dodings = $this->Mdoding->getDodings();
        if($dodings){
            $this->response($dodings,200);
        }else{
            $this->response([],200);
        }
    }
}
?>