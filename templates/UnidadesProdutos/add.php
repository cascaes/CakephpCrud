<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadesProduto $unidadesProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Menu') ?></h4>
            <?= $this->Html->link(__('Lista de Unidades Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unidadesProdutos form content">
            <?= $this->Form->create($unidadesProduto) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('nome_un');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
