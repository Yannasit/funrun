<?php namespace App\Models;
use CodeIgniter\Model;

class DataModel extends Model{
    protected $table = 'member';

    protected $primaryKey = 'id_card';
    
    protected $allowedFields = ['id_card','name','age','email','password'];
    
    
}




?>