<?php namespace App\Models;

use CodeIgniter\Model;

class Contracts_model extends Model
{
        protected $table      = 'contracts';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['title', 'project_id', 'budget_id', 'date_reg', 'date_start', 'date_end', 'price_limit', 'price_pre'];

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