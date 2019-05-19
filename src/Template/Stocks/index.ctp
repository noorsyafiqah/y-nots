<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock[]|\Cake\Collection\CollectionInterface $stocks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['action' => 'add']) ?></li>
        <li><a href="Users" target="_blank">Users</a></li>
        <li><a href="Bookstores" target="_blank">Bookstores</a></li>
        <li><a href="Invoices" target="_blank">Invoices</a></li>
        <li><a href="Books" target="_blank">Books</a> </li>
    </ul>
</nav>
<div class="stocks index large-9 medium-8 columns content">
    <h3><?= __('Stocks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('StockID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateDeliver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateReturn') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stocks as $stock): ?>
            <tr>
                <td><?= $this->Number->format($stock->StockID) ?></td>
                <td><?= $this->Number->format($stock->Quantity) ?></td>
                <td><?= h($stock->DateDeliver) ?></td>
                <td><?= h($stock->DateReturn) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stock->StockID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stock->StockID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stock->StockID], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->StockID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
