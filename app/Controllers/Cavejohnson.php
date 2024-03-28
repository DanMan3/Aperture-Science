<?php


namespace App\Controllers;



class Cavejohnson extends BaseController
{

    public function index(){

        $data = [

            'meta_title' => 'Cave Johnson Quotes',
            'title' => 'The Greatest Scientist who Ever Lived'
        ];

  
    return view('cavejohnson_quotes', $data);
   
        

    }


}
