<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Roles Setting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users Roles'), ['controller' => 'UsersRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Role'), ['controller' => 'UsersRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersRolesSettings index large-9 medium-8 columns content">
    <h3><?= __('Users Roles Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersRolesSettings as $usersRolesSetting): ?>
            <tr>
                <td><?= $this->Number->format($usersRolesSetting->id) ?></td>
                <td><?= $usersRolesSetting->has('users_role') ? $this->Html->link($usersRolesSetting->users_role->title, ['controller' => 'UsersRoles', 'action' => 'view', $usersRolesSetting->users_role->id]) : '' ?></td>
                <td><?= h($usersRolesSetting->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersRolesSetting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersRolesSetting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersRolesSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRolesSetting->id)]) ?>
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
