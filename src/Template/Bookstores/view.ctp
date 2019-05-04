<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstore $bookstore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookstore'), ['action' => 'edit', $bookstore->bookStoreID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookstore'), ['action' => 'delete', $bookstore->bookStoreID], ['confirm' => __('Are you sure you want to delete # {0}?', $bookstore->bookStoreID)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookstores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookstore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookstores view large-9 medium-8 columns content">
    <h3><?= h($bookstore->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= h($bookstore->branch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bookstore->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BookStoreID') ?></th>
            <td><?= $this->Number->format($bookstore->bookStoreID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalBranch') ?></th>
            <td><?= $this->Number->format($bookstore->totalBranch) ?></td>
        </tr>
    </table>
</div>
