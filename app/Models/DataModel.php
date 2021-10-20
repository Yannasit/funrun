<?php namespace App\Models;
use CodeIgniter\Model;

class DataModel extends Model{
    protected $table = 'member';
   
    protected $allowedFields = ['id_card','name','age','email','password'];
    
    protected $primaryKey = 'id_card';
    
}

?>