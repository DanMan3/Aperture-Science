<?php namespace App\Controllers;


use App\Models\QuoteModel;




class Glados extends BaseController
{

    protected $commonData = [

        'meta_title' => 'GLaDOS Quotes',
        'title' => 'The Greatest from GLaDOS'

    ];


    public function index(){

        $data = [

            'meta_title' => 'GLaDOS Quotes',
            'title' => 'The Greatest from GLaDOS'
        ];


    return view('glados_quotes', $this->commonData);    
   



    }


    public function post()
    {
        // Load the QuoteModel
        $quoteModel = new QuoteModel();
    
        // Fetch quotes from the database with character and character content fields
        $quotes = $quoteModel->select('character, post_content')->findAll();
    
        // Pass the quotes data to the view
        $data = [
            'quotes' => $quotes,
            'meta_title' => 'GLaDOS Quotes',
            'title' => 'The Greatest from GLaDOS'

        ];
    
        // Load the view with the quotes data
        return view('glados_quotes', $data);

    
}

}