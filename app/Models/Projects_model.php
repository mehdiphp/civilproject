<?php namespace App\Models;

use CodeIgniter\Model;

class Projects_model extends Model
{
        protected $table      = 'projects';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['title', 'section', 'code', 'provience'];

        protected $useTimestamps = true;
        protected $dateFormat = 'datetime';

        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
}

?>