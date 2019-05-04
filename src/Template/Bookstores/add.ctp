<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstore $bookstore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bookstores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bookstores form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstore) ?>
    <fieldset>
        <legend><?= __('Add Bookstore') ?></legend>
        <?php
            echo $this->Form->control('branch');
            echo $this->Form->control('name');
            echo $this->Form->control('totalBranch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
