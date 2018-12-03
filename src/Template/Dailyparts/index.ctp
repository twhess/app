<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailypart[]|\Cake\Collection\CollectionInterface $dailyparts
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dailypart'), ['action' => 'add']) ?></li>
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
</nav> -->
<div class="dailyparts index large-9 medium-8 columns content">
    <h3><?= __('Daily Parts Sheet') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
              <th scope="col"><?= $this->Paginator->sort('created','Added') ?></th>

                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id','Added By') ?></th>
                <th scope="col"><?= $this->Paginator->sort('po') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special_request','Special Instructions') ?></th>
                <th scope="col"><?= $this->Paginator->sort('urgency_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servco_id','Servco Location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>

                <th scope="col"><?= $this->Paginator->sort('modified','Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dailyparts as $dailypart): ?>
            <tr>
              <td><?= h($dailypart->created) ?></td>
                <!-- <td><?= $this->Number->format($dailypart->id) ?></td> -->
                <td><?= $dailypart->has('vendor') ? $this->Html->link($dailypart->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $dailypart->vendor->id]) : '' ?></td>
                  <td><?= $dailypart->has('user') ? $this->Html->link($dailypart->user->first_name.' '.$dailypart->user->last_name, ['controller' => 'Users', 'action' => 'view', $dailypart->user->id]) : '' ?></td>
                <td><?= h($dailypart->po) ?></td>
                <td><?= h($dailypart->description) ?></td>
                <td><?= h($dailypart->special_request) ?></td>
                <td><?= $dailypart->has('urgency') ? $this->Html->link($dailypart->urgency->option_name, ['controller' => 'Urgencies', 'action' => 'view', $dailypart->urgency->id]) : '' ?></td>
                <td><?= $dailypart->has('action') ? $this->Html->link($dailypart->action->option_name, ['controller' => 'Actions', 'action' => 'view', $dailypart->action->id]) : '' ?></td>
                <td><?= $dailypart->has('servco') ? $this->Html->link($dailypart->servco->name, ['controller' => 'Servcos', 'action' => 'view', $dailypart->servco->id]) : '' ?></td>

                <td><?= h($dailypart->status) ?></td>

                <td><?= h($dailypart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dailypart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dailypart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dailypart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailypart->id)]) ?>
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
