<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidadesProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidadesProdutosTable Test Case
 */
class UnidadesProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidadesProdutosTable
     */
    protected $UnidadesProdutos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UnidadesProdutos',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('UnidadesProdutos') ? [] : ['className' => UnidadesProdutosTable::class];
        $this->UnidadesProdutos = $this->getTableLocator()->get('UnidadesProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UnidadesProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UnidadesProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
