<?php namespace App\Models;

use CodeIgniter\Model;

class regisModel extends Model{
    protected $table = 'regis';
    protected $allowedFields = ['ID','member','category_run'];
    protected $primaryKey = 'ID';
}

class categoryModel extends Model{
    protected $table = 'regis';
    protected $allowedFields = ['category_id','category_name','length','price'];
    protected $primaryKey = 'category_id';
}



?>