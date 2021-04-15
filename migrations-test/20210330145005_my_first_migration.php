<?php
declare(string_types=1);

use Phinx\Migration\AbstractMigration;

final class MyFirstMigration extends AbstractMigration
{

    /**
     * Change Method.
     */
    public function change()
    {

       //create the table
       $table=$this->table('monster');
       $table->addColumn('id', 'integer')
             ->addColumn('Name', 'string', ['limit'==>20])
             ->addColumn('Image', 'blob')
             ->addColumn('Audio', 'blob')
             ->addIndex(['id'], ['unique'==>true])
             ->create();
    }
    
}