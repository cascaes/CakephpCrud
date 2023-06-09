<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UnidadesProduto Entity
 *
 * @property int $id
 * @property string $nome_un
 *
 * @property \App\Model\Entity\Produto[] $produtos
 */
class UnidadesProduto extends Entity
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
        'nome_un' => true,
        'produtos' => true,
    ];
}
