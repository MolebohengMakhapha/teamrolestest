<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Question> $questions
 */
?>
<div class="questions index content">
    <?= $this->Html->link(__('Home'), ['controller' => 'Welcome', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Questions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('question_text') ?></th>
                    <th><?= $this->Paginator->sort('answer_a') ?></th>
                    <th><?= $this->Paginator->sort('answer_b') ?></th>
                    <!-- <th class="actions"><?= __('Actions') ?></th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $question): ?>
                <tr>
                    <td><?= $this->Number->format($question->id) ?></td>
                    <td><?= h($question->question_text) ?></td>
                    <td><?= h($question->answer_a) ?></td>
                    <td><?= h($question->answer_b) ?></td>
                    <!-- <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
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