<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedore $vendedore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Menu') ?></h4>
            <?= $this->Html->link(__('Editar Vendedor'), ['action' => 'edit', $vendedore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Vendedor'), ['action' => 'delete', $vendedore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Vendedores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Vendedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendedores view content">
            <h3><?= h($vendedore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Vendedor') ?></th>
                    <td><?= h($vendedore->nome_vendedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vendedore->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
