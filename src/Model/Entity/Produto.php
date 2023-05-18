<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome_produto
 * @property int $categorias_produto_id
 * @property int $unidades_produto_id
 * @property float $preco
 * @property bool $perecivel
 * @property \Cake\I18n\FrozenDate $dt_validade
 * @property \Cake\I18n\FrozenDate|null $dt_fabricacao
 *
 * @property \App\Model\Entity\CategoriasProduto $categorias_produto
 * @property \App\Model\Entity\UnidadesProduto $unidades_produto
 * @property \App\Model\Entity\Venda[] $venda
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome_produto' => true,
        'categorias_produto_id' => true,
        'unidades_produto_id' => true,
        'preco' => true,
        'perecivel' => true,
        'dt_validade' => true,
        'dt_fabricacao' => true,
        'categorias_produto' => true,
        'unidades_produto' => true,
        'venda' => true,
    ];
}
