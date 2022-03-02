<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Brand seed.
 */
class BrandSeed extends AbstractSeed
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
            ],
            [
                'id' => '2',
            ],
            [
                'id' => '3',
            ],
        ];

        $table = $this->table('brands');
        $table->insert($data)->save();
    }
}
