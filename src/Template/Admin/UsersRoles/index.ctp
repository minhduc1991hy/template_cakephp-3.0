<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Role'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersRoles index large-9 medium-8 columns content">
    <h3><?= __('Users Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inherit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersRoles as $usersRole): ?>
            <tr>
                <td><?= $this->Number->format($usersRole->id) ?></td>
                <td><?= h($usersRole->title) ?></td>
                <td><?= $this->Number->format($usersRole->inherit) ?></td>
                <td><?= h($usersRole->special) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRole->id)]) ?>
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
