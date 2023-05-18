<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Produto') ?></th>
                    <td><?= h($produto->nome_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorias Produto') ?></th>
                    <td><?= $produto->has('categorias_produto') ? $this->Html->link($produto->categorias_produto->id, ['controller' => 'CategoriasProdutos', 'action' => 'view', $produto->categorias_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidades Produto') ?></th>
                    <td><?= $produto->has('unidades_produto') ? $this->Html->link($produto->unidades_produto->id, ['controller' => 'UnidadesProdutos', 'action' => 'view', $produto->unidades_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco') ?></th>
                    <td><?= $this->Number->format($produto->preco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dt Validade') ?></th>
                    <td><?= h($produto->dt_validade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dt Fabricacao') ?></th>
                    <td><?= h($produto->dt_fabricacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Perecivel') ?></th>
                    <td><?= $produto->perecivel ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Venda') ?></h4>
                <?php if (!empty($produto->venda)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Vendedores Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($produto->venda as $venda) : ?>
                        <tr>
                            <td><?= h($venda->id) ?></td>
                            <td><?= h($venda->vendedores_id) ?></td>
                            <td><?= h($venda->cliente_id) ?></td>
                            <td><?= h($venda->produto_id) ?></td>
                            <td><?= h($venda->quantidade) ?></td>
                            <td><?= h($venda->valor_total) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Venda', 'action' => 'view', $venda->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Venda', 'action' => 'edit', $venda->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Venda', 'action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
