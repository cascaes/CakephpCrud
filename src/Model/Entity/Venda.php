<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $vendedores_id
 * @property int $cliente_id
 * @property int $produto_id
 * @property int $quantidade
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Vendedore $vendedore
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Produto $produto
 */
class Venda extends Entity
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
        'vendedores_id' => true,
        'cliente_id' => true,
        'produto_id' => true,
        'quantidade' => true,
        'created' => true,
        'vendedore' => true,
        'cliente' => true,
        'produto' => true,
    ];
}
