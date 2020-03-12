<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersPoll[]|\Cake\Collection\CollectionInterface $usersPolls
 */
?>
<div class="usersPolls index content">
    <?= $this->Html->link(__('New Users Poll'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users Polls') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('poll_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersPolls as $usersPoll): ?>
                <tr>
                    <td><?= $this->Number->format($usersPoll->id) ?></td>
                    <td><?= $usersPoll->has('poll') ? $this->Html->link($usersPoll->poll->name, ['controller' => 'Polls', 'action' => 'view', $usersPoll->poll->id]) : '' ?></td>
                    <td><?= $usersPoll->has('user') ? $this->Html->link($usersPoll->user->name, ['controller' => 'Users', 'action' => 'view', $usersPoll->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersPoll->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersPoll->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersPoll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersPoll->id)]) ?>
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
