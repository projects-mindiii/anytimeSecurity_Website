<?php defined('BASEPATH') OR exit("No direct script access allowed");
class Credential_hook{
   
   public function __construct() {
      
   }
  
   public function load_credential() {
       $dotenv = Dotenv\Dotenv::create(FCPATH); //Load .env file
     $dotenv->load();
   }
  
}
?>