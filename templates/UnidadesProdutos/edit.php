<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadesProduto $unidadesProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unidadesProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unidadesProduto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Unidades Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unidadesProdutos form content">
            <?= $this->Form->create($unidadesProduto) ?>
            <fieldset>
                <legend><?= __('Edit Unidades Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_un');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
