<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Servco[]|\Cake\Collection\CollectionInterface $servcos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dailyparts'), ['controller' => 'Dailyparts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dailypart'), ['controller' => 'Dailyparts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servcos index large-9 medium-8 columns content">
    <h3><?= __('Servcos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servcos as $servco): ?>
            <tr>
                <td><?= $this->Number->format($servco->id) ?></td>
                <td><?= h($servco->name) ?></td>
                <td><?= h($servco->street) ?></td>
                <td><?= h($servco->city) ?></td>
                <td><?= h($servco->state) ?></td>
                <td><?= h($servco->zip) ?></td>
                <td><?= h($servco->phone) ?></td>
                <td><?= h($servco->fax) ?></td>
                <td><?= h($servco->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servco->id)]) ?>
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
