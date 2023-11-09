<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primeryKey = 'id';
    protected $allowedFields = [
        'username', 'avatar', 'password', 'salt', 'created_date',
        'created_date', 'update_date', 'update_by'
    ];
    protected $returnType = 'App\Entitas\User';
    protected $useTimestamps = $false;
}
