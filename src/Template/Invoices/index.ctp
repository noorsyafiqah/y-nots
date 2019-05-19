<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?></li>
                <li><a href="Users" target="_blank">Users</a></li>
        <li><a href="Bookstores" target="_blank">Bookstores</a></li>
        <li><a href="Books" target="_blank">Books</a></li>
        <li><a href="Stocks" target="_blank">Stocks</a> </li>
    </ul>
</nav>
<div class="invoices index large-9 medium-8 columns content">
    <h3><?= __('Invoices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('invoiceID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalPrice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bookStoreID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stockID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->invoiceID) ?></td>
                <td><?= $this->Number->format($invoice->totalPrice) ?></td>
                <td><?= $this->Number->format($invoice->isbn) ?></td>
                <td><?= $this->Number->format($invoice->bookStoreID) ?></td>
                <td><?= $this->Number->format($invoice->stockID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->invoiceID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->invoiceID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->invoiceID], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->invoiceID)]) ?>
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
