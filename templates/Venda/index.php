<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venda> $venda
 */
?>
<div class="venda index content">
    <?= $this->Html->link(__('Nova Venda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Venda') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vendedores_id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($venda as $venda): ?>
                <tr>
                    <td><?= $this->Number->format($venda->id) ?></td>
                    <td><?= $venda->has('vendedore') ? $this->Html->link($venda->vendedore->nome_vendedor, ['controller' => 'Vendedores', 'action' => 'view', $venda->vendedore->id]) : '' ?></td>
                    <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->nome_cliente, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
                    <td><?= $venda->has('produto') ? $this->Html->link($venda->produto->nome_produto, ['controller' => 'Produtos', 'action' => 'view', $venda->produto->id]) : '' ?></td>
                    <td><?= $this->Number->format($venda->quantidade) ?></td>
                    <td><?= h($venda->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
