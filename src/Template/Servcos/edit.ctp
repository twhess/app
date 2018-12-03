<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servco $servco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Servcos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['controller' => 'Dailyparts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dailypart'), ['controller' => 'Dailyparts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servcos form large-9 medium-8 columns content">
    <?= $this->Form->create($servco) ?>
    <fieldset>
        <legend><?= __('Edit Servco') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('street');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zip');
            echo $this->Form->control('phone');
            echo $this->Form->control('fax');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
