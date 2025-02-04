<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TeamRole> $teamRoles
 */
?>
<div class="teamRoles index content">
    <?= $this->Html->link(__('Home'), ['controller' => 'Welcome', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Team Roles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <!-- <th class="actions"><?= __('Actions') ?></th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teamRoles as $teamRole): ?>
                <tr>
                    <td><?= $this->Number->format($teamRole->id) ?></td>
                    <td><?= h($teamRole->name) ?></td>
                     <!-- <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $teamRole->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamRole->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamRole->id)]) ?>
                    </td> -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
<style>
    .button-group {
        margin-bottom: 20px; /* Optional: Add some space below the button group */
    }
    .button {
        margin: 2px; /* Add margin to the buttons */
    }
    .button:hover {
        background-color:rgb(117, 8, 28);
    }
</style>