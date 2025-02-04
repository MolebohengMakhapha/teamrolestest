<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TeamRole $teamRole
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Team Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="teamRoles form content">
            <?= $this->Form->create($teamRole) ?>
            <fieldset>
                <legend><?= __('Add Team Role') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('points');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
