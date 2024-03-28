<?php namespace App\Controllers;


use App\Models\QuoteModel;
use App\Models\UserModel;

class Quotes extends BaseController
{

    protected $commonData = [
        'meta_title' => 'Add Quote',
        'title' => 'Add New Quote'
    ];


    public function index() //New quote page
    {
        
        return view('newquote', $this->commonData); 
    } 
    
    public function post() // Submitting a new quote
    {

        if($this->request->getMethod() == 'post'){
            $characterId = $this->request->getPost('character');
            $model = new QuoteModel();
            $model->save($_POST);
    

        }

        $post_data = $this->commonData;
        $post_data["ispost"] = true;

        return view('newquote', $post_data); 

    }


    public function new(){ // Edit/delete quote
       
        return view('edit_quote', $this->commonData);

    }


}
