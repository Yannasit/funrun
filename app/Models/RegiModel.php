<?php namespace App\Models;
use CodeIgniter\Model;

class RegiModel extends Model{
    protected $table = 'regis';

    protected $primaryKey = 'ID';
    
    protected $allowedFields = ['ID','member','category_run'];
    
    
}

?>