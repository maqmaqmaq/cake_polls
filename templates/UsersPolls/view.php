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
            <?= $this->Html->link(__('Edit Users Poll'), ['action' => 'edit', $usersPoll->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Users Poll'), ['action' => 'delete', $usersPoll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPoll->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users Polls'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Users Poll'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersPolls view content">
            <h3><?= h($usersPoll->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Poll') ?></th>
                    <td><?= $usersPoll->has('poll') ? $this->Html->link($usersPoll->poll->name, ['controller' => 'Polls', 'action' => 'view', $usersPoll->poll->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $usersPoll->has('user') ? $this->Html->link($usersPoll->user->name, ['controller' => 'Users', 'action' => 'view', $usersPoll->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersPoll->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
