<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailypart $dailypart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dailypart'), ['action' => 'edit', $dailypart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dailypart'), ['action' => 'delete', $dailypart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailypart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dailypart'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Urgencies'), ['controller' => 'Urgencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Urgency'), ['controller' => 'Urgencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servcos'), ['controller' => 'Servcos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servco'), ['controller' => 'Servcos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dailyparts view large-9 medium-8 columns content">
    <h3><?= h($dailypart->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $dailypart->has('user') ? $this->Html->link($dailypart->user->id, ['controller' => 'Users', 'action' => 'view', $dailypart->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $dailypart->has('vendor') ? $this->Html->link($dailypart->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $dailypart->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Po') ?></th>
            <td><?= h($dailypart->po) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urgency') ?></th>
            <td><?= $dailypart->has('urgency') ? $this->Html->link($dailypart->urgency->id, ['controller' => 'Urgencies', 'action' => 'view', $dailypart->urgency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= $dailypart->has('action') ? $this->Html->link($dailypart->action->id, ['controller' => 'Actions', 'action' => 'view', $dailypart->action->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Servco') ?></th>
            <td><?= $dailypart->has('servco') ? $this->Html->link($dailypart->servco->name, ['controller' => 'Servcos', 'action' => 'view', $dailypart->servco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($dailypart->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dailypart->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dailypart->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dailypart->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($dailypart->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Special Request') ?></h4>
        <?= $this->Text->autoParagraph(h($dailypart->special_request)); ?>
    </div>
</div>
