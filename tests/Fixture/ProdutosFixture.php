<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
{
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
                'nome_produto' => 'Lorem ipsum dolor sit amet',
                'categorias_produto_id' => 1,
                'unidades_produto_id' => 1,
                'preco' => 1,
                'perecivel' => 1,
                'dt_validade' => '2023-05-18',
                'dt_fabricacao' => '2023-05-18',
            ],
        ];
        parent::init();
    }
}
