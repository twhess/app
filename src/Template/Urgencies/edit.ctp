<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Urgency $urgency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $urgency->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $urgency->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Urgencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['controller' => 'Dailyparts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dailypart'), ['controller' => 'Dailyparts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="urgencies form large-9 medium-8 columns content">
    <?= $this->Form->create($urgency) ?>
    <fieldset>
        <legend><?= __('Edit Urgency') ?></legend>
        <?php
            echo $this->Form->control('option_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
