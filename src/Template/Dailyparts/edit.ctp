<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailypart $dailypart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dailypart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dailypart->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Urgencies'), ['controller' => 'Urgencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Urgency'), ['controller' => 'Urgencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Servcos'), ['controller' => 'Servcos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servco'), ['controller' => 'Servcos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyparts form large-9 medium-8 columns content">
    <?= $this->Form->create($dailypart) ?>
    <fieldset>
        <legend><?= __('Edit Dailypart') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('vendor_id', ['options' => $vendors]);
            echo $this->Form->control('po');
            echo $this->Form->control('description');
            echo $this->Form->control('special_request');
            echo $this->Form->control('urgency_id', ['options' => $urgencies]);
            echo $this->Form->control('action_id', ['options' => $actions]);
            echo $this->Form->control('servco_id', ['options' => $servcos]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
