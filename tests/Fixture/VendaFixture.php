<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendaFixture
 */
class VendaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'venda';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'vendedores_id' => 1,
                'cliente_id' => 1,
                'produto_id' => 1,
                'quantidade' => 1,
                'created' => '',
            ],
        ];
        parent::init();
    }
}
