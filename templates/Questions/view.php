<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="questions view content">
            <h3><?= h($question->question_text) ?></h3>
            <table>
                <tr>
                    <th><?= __('Question Text') ?></th>
                    <td><?= h($question->question_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer A') ?></th>
                    <td><?= h($question->answer_a) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer B') ?></th>
                    <td><?= h($question->answer_b) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Responses') ?></h4>
                <?php if (!empty($question->responses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Answer') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($question->responses as $response) : ?>
                        <tr>
                            <td><?= h($response->id) ?></td>
                            <td><?= h($response->user_id) ?></td>
                            <td><?= h($response->question_id) ?></td>
                            <td><?= h($response->answer) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Responses', 'action' => 'view', $response->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Responses', 'action' => 'edit', $response->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Responses', 'action' => 'delete', $response->id], ['confirm' => __('Are you sure you want to delete # {0}?', $response->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>