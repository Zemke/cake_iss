<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('active', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table
          ->addColumn('brand_id', 'integer', [
              'default' => null,
              'limit' => 11,
              'null' => false,
          ])
          ->addForeignKey('brand_id', 'brands', 'id');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
