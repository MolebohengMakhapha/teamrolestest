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
            <?= $this->Html->link(__('Edit Team Role'), ['action' => 'edit', $teamRole->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Team Role'), ['action' => 'delete', $teamRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamRole->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Team Roles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Team Role'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="teamRoles view content">
            <h3><?= h($teamRole->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($teamRole->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($teamRole->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Points') ?></th>
                    <td><?= $teamRole->points === null ? '' : $this->Number->format($teamRole->points) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>