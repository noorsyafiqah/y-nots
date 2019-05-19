<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->StockID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->StockID], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->StockID)]) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stocks view large-9 medium-8 columns content">
    <h3><?= h($stock->StockID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('StockID') ?></th>
            <td><?= $this->Number->format($stock->StockID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($stock->Quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateDeliver') ?></th>
            <td><?= h($stock->DateDeliver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateReturn') ?></th>
            <td><?= h($stock->DateReturn) ?></td>
        </tr>
    </table>
</div>
