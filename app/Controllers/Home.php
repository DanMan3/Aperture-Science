<?php


namespace App\Controllers;



class Home extends BaseController
{

    public function index(){

        $data = [

            'meta_title' => 'Aperture Science',
            'title' => 'Science'
        ];


    return view('home', $data);

        

    }


}
