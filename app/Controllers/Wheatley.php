<?php namespace App\Controllers;


use App\Models\QuoteModel;


class Wheatley extends BaseController
{


    protected $commonData = [

        'meta_title' => 'Wheatley Quotes',
        'title' => 'Oh, hello there!'

    ];

public function index(){


return view('wheatley_quotes', $this->commonData);



}




















}