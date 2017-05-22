<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersRolesSetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersRolesSetting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Roles Settings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users Roles'), ['controller' => 'UsersRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Users Role'), ['controller' => 'UsersRoles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersRolesSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($usersRolesSetting) ?>
    <fieldset>
        <legend><?= __('Edit Users Roles Setting') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $usersRoles, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('default');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
