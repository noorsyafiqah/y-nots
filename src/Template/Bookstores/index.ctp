<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstore[]|\Cake\Collection\CollectionInterface $bookstores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bookstore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookstores index large-9 medium-8 columns content">
    <h3><?= __('Bookstores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bookStoreID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalBranch') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookstores as $bookstore): ?>
            <tr>
                <td><?= $this->Number->format($bookstore->bookStoreID) ?></td>
                <td><?= h($bookstore->branch) ?></td>
                <td><?= h($bookstore->name) ?></td>
                <td><?= $this->Number->format($bookstore->totalBranch) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bookstore->bookStoreID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookstore->bookStoreID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookstore->bookStoreID], ['confirm' => __('Are you sure you want to delete # {0}?', $bookstore->bookStoreID)]) ?>
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
