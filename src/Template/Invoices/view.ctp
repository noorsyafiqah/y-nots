<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->invoiceID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->invoiceID], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->invoiceID)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->invoiceID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('InvoiceID') ?></th>
            <td><?= $this->Number->format($invoice->invoiceID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalPrice') ?></th>
            <td><?= $this->Number->format($invoice->totalPrice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= $this->Number->format($invoice->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookStoreID') ?></th>
            <td><?= $this->Number->format($invoice->bookStoreID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StockID') ?></th>
            <td><?= $this->Number->format($invoice->stockID) ?></td>
        </tr>
    </table>
</div>
