<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users Roles'), ['controller' => 'UsersRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Role'), ['controller' => 'UsersRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $usersRoles]);
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('status');
            echo $this->Form->control('email');
            echo $this->Form->control('birthday');
            echo $this->Form->control('country');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
