<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Role'), ['action' => 'edit', $usersRole->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Role'), ['action' => 'delete', $usersRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersRole->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Role'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersRoles view large-9 medium-8 columns content">
    <h3><?= h($usersRole->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($usersRole->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersRole->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inherit') ?></th>
            <td><?= $this->Number->format($usersRole->inherit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Special') ?></th>
            <td><?= $usersRole->special ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
