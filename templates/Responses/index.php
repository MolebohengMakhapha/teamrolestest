<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Response> $responses
 */
?>
<div class="responses index content">
    <?= $this->Html->link(__('New Response'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Home'), ['controller' => 'Welcome', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Responses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('question_id') ?></th>
                    <th><?= $this->Paginator->sort('answer') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($responses as $response): ?>
                <tr>
                    <td><?= $this->Number->format($response->id) ?></td>
                    <td><?= $this->Number->format($response->user_id) ?></td>
                    <td><?= $response->hasValue('question') ? $this->Html->link($response->question->question_text, ['controller' => 'Questions', 'action' => 'view', $response->question->id]) : '' ?></td>
                    <td><?= h($response->answer) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $response->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $response->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $response->id], ['confirm' => __('Are you sure you want to delete # {0}?', $response->id)]) ?>
                    </td>
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