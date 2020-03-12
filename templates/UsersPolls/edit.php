<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersPoll $usersPoll
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersPoll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersPoll->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users Polls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersPolls form content">
            <?= $this->Form->create($usersPoll) ?>
            <fieldset>
                <legend><?= __('Edit Users Poll') ?></legend>
                <?php
                    echo $this->Form->control('poll_id', ['options' => $polls, 'empty' => true]);
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
