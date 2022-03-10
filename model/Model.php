<?php
include('Book.php');
class Model {


    public function getBookDetails()
    {

      
        return array("xyz"=> new Book('javra','kshitiz thapa','this is javra book'),
             "ksss"=>  new Book('havra','ksksks','this is havra book') 
        
    );
    } 
  
    public function getBook($title)
    {
        $allbooks=$this->getBookDetails();
        return $allbooks($title);
    }
}


?>