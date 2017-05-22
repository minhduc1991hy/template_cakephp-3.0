<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users Roles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usersRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($usersRole) ?>
    <fieldset>
        <legend><?= __('Add Users Role') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('inherit');
            echo $this->Form->control('special');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
