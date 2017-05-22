<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Roles Setting'), ['action' => 'edit', $usersRolesSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Roles Setting'), ['action' => 'delete', $usersRolesSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRolesSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Roles Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Roles Setting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users Roles'), ['controller' => 'UsersRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Role'), ['controller' => 'UsersRoles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersRolesSettings view large-9 medium-8 columns content">
    <h3><?= h($usersRolesSetting->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Users Role') ?></th>
            <td><?= $usersRolesSetting->has('users_role') ? $this->Html->link($usersRolesSetting->users_role->title, ['controller' => 'UsersRoles', 'action' => 'view', $usersRolesSetting->users_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($usersRolesSetting->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersRolesSetting->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Default') ?></h4>
        <?= $this->Text->autoParagraph(h($usersRolesSetting->default)); ?>
    </div>
</div>
