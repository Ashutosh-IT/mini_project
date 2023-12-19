<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model{
    protected $table = 'students';
    protected $primaryKey = 'urn';
    protected $allowedFields = ['urn','name','branch'];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true; 
    protected $deletedField = 'deleted_at';
}

?>