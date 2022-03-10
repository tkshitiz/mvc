<?php
include('Book.php');
class Model {


    public function getBookDetails()
    {

           return array("key1"=> new Book('javra','kshitiz thapa','this is javra book'),
             "key2"=>  new Book('havra','ksksks','this is havra book')
        
    );
    } 
  
    public function getBook($title)
    {
        $allbooks=$this->getBookDetails(); 
        print_r($allbooks[$title]);
        // return $allbooks[$title];

        
    
    }
}


?>