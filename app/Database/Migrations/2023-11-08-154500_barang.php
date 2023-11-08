<?

use PHPUnit\Framework\Constraint\Constraint;

<?php namespace App\Database\Migrations;

class User extends \CodeIgniter\Database\Migration{

    public function up(){
        $this -> forge-> addField([
            'id' => [
                'type' =>'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama' =>[
                'type'=> 'TEXT',
            ],
            'harga' =>[
                'type' => 'INT',
                'constraint' => 11
            ]
            ]);
    }
}

?>