<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stocks form large-9 medium-8 columns content">
    <?= $this->Form->create($stock) ?>
    <fieldset>
        <legend><?= __('Add Stock') ?></legend>
        <?php
            echo $this->Form->control('Quantity');
            echo $this->Form->control('DateDeliver');
            echo $this->Form->control('DateReturn');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
