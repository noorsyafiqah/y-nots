<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->isbn]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->isbn], ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->isbn) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($book->Genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= $this->Number->format($book->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($book->Price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AuthorID') ?></th>
            <td><?= $this->Number->format($book->AuthorID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserID') ?></th>
            <td><?= $this->Number->format($book->userID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PublishYear') ?></th>
            <td><?= h($book->PublishYear) ?></td>
        </tr>
    </table>
</div>
