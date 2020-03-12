<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersPolls Model
 *
 * @property \App\Model\Table\PollsTable&\Cake\ORM\Association\BelongsTo $Polls
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UsersPoll newEmptyEntity()
 * @method \App\Model\Entity\UsersPoll newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UsersPoll[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersPoll get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersPoll findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UsersPoll patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPoll[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersPoll|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersPoll saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersPoll[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersPoll[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersPoll[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UsersPoll[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersPollsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users_polls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Polls', [
            'foreignKey' => 'poll_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['poll_id'], 'Polls'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
