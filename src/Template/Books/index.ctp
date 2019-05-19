<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?></li>
        <li><a href="Users" target="_blank">Users</a></li>
        <li><a href="Bookstores" target="_blank">Bookstores</a></li>
        <li><a href="Invoices" target="_blank">Invoices</a></li>
        <li><a href="Stocks" target="_blank">Stocks</a> </li>
    </ul>
</nav>
<div class="books index large-9 medium-8 columns content">
    <h3><?= __('Books') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PublishYear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AuthorID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('userID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $this->Number->format($book->isbn) ?></td>
                <td><?= h($book->Title) ?></td>
                <td><?= h($book->Genre) ?></td>
                <td><?= h($book->PublishYear) ?></td>
                <td><?= $this->Number->format($book->Price) ?></td>
                <td><?= $this->Number->format($book->AuthorID) ?></td>
                <td><?= $this->Number->format($book->userID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $book->isbn]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->isbn]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]) ?>
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
