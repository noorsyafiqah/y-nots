<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $book->isbn],
                ['confirm' => __('Are you sure you want to delete # {0}?', $book->isbn)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="books form large-9 medium-8 columns content">
    <?= $this->Form->create($book) ?>
    <fieldset>
        <legend><?= __('Edit Book') ?></legend>
        <?php
            echo $this->Form->control('Title');
            echo $this->Form->control('Genre');
            echo $this->Form->control('PublishYear');
            echo $this->Form->control('Price');
            echo $this->Form->control('AuthorID');
            echo $this->Form->control('userID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
