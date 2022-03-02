<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'active' => '1',
                'brand_id' => '1',
                'name' => 'first',
            ],
            [
                'id' => '2',
                'active' => '0',
                'brand_id' => '1',
                'name' => 'second',
            ],
            [
                'id' => '3',
                'active' => '0',
                'brand_id' => '2',
                'name' => 'third',
            ],
            [
                'id' => '4',
                'active' => '1',
                'brand_id' => '2',
                'name' => 'fourth',
            ],
            [
                'id' => '5',
                'active' => '0',
                'brand_id' => '3',
                'name' => 'fifth',
            ],
            [
                'id' => '6',
                'active' => '1',
                'brand_id' => '1',
                'name' => 'sixth',
            ],
        ];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
