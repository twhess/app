<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Urgency $urgency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Urgency'), ['action' => 'edit', $urgency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Urgency'), ['action' => 'delete', $urgency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $urgency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Urgencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Urgency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['controller' => 'Dailyparts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dailypart'), ['controller' => 'Dailyparts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="urgencies view large-9 medium-8 columns content">
    <h3><?= h($urgency->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Option Name') ?></th>
            <td><?= h($urgency->option_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($urgency->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dailyparts') ?></h4>
        <?php if (!empty($urgency->dailyparts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Po') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Special Request') ?></th>
                <th scope="col"><?= __('Urgency Id') ?></th>
                <th scope="col"><?= __('Action Id') ?></th>
                <th scope="col"><?= __('Servco Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($urgency->dailyparts as $dailyparts): ?>
            <tr>
                <td><?= h($dailyparts->id) ?></td>
                <td><?= h($dailyparts->user_id) ?></td>
                <td><?= h($dailyparts->vendor_id) ?></td>
                <td><?= h($dailyparts->po) ?></td>
                <td><?= h($dailyparts->description) ?></td>
                <td><?= h($dailyparts->special_request) ?></td>
                <td><?= h($dailyparts->urgency_id) ?></td>
                <td><?= h($dailyparts->action_id) ?></td>
                <td><?= h($dailyparts->servco_id) ?></td>
                <td><?= h($dailyparts->status) ?></td>
                <td><?= h($dailyparts->created) ?></td>
                <td><?= h($dailyparts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dailyparts', 'action' => 'view', $dailyparts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dailyparts', 'action' => 'edit', $dailyparts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dailyparts', 'action' => 'delete', $dailyparts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyparts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
