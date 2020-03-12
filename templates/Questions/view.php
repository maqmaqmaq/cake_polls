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
    <div class="column-responsive column-80">
        <div class="questions view content">
            <h3><?= h($question->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Poll') ?></th>
                    <td><?= $question->has('poll') ? $this->Html->link($question->poll->name, ['controller' => 'Polls', 'action' => 'view', $question->poll->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Question') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($question->question)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Answers') ?></h4>
                <?php if (!empty($question->answers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Answer') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Count') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($question->answers as $answers) : ?>
                        <tr>
                            <td><?= h($answers->id) ?></td>
                            <td><?= h($answers->answer) ?></td>
                            <td><?= h($answers->question_id) ?></td>
                            <td><?= h($answers->count) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Answers', 'action' => 'view', $answers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Answers', 'action' => 'edit', $answers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id)]) ?>
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
