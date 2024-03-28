<?php

namespace App\Models;

use CodeIgniter\Model;

class QuoteModel extends Model
{

    protected $table        = 'quotes';
    protected $primaryKey   = 'post_id';

    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = true;

    protected $allowedFields = ['character', 'post_content', 'post_created_at'];

    protected $useTimeStamps    = true;
    protected $createdField     = 'post_created_at';
    // protected $updatedField     = 'post_updated_at';
    protected $dateFormat    = 'datetime';
    // protected $deletedField     = 'deleted_at';
    // 
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;  


    // protected $beforeInsert = ['checkName'];

    // public function checkName(array $data){
    //     $newTitle = $data['data']['post_title']. ' Extra Features';
    //     $data['data']['post_title'] = $newTitle; 

    //     return $data;


    }
    
   

   

