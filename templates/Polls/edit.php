<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll $poll
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poll->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Polls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="polls form content">
            <?= $this->Form->create($poll) ?>
            <fieldset>
                <legend><?= __('Edit Poll') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('expiration_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
