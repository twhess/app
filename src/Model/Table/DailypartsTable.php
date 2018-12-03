<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dailyparts Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\VendorsTable|\Cake\ORM\Association\BelongsTo $Vendors
 * @property \App\Model\Table\UrgenciesTable|\Cake\ORM\Association\BelongsTo $Urgencies
 * @property \App\Model\Table\ActionsTable|\Cake\ORM\Association\BelongsTo $Actions
 * @property \App\Model\Table\ServcosTable|\Cake\ORM\Association\BelongsTo $Servcos
 *
 * @method \App\Model\Entity\Dailypart get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dailypart newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dailypart[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dailypart|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailypart|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dailypart patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dailypart[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dailypart findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DailypartsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('dailyparts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Urgencies', [
            'foreignKey' => 'urgency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Actions', [
            'foreignKey' => 'action_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Servcos', [
            'foreignKey' => 'servco_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('po')
            ->maxLength('po', 25)
            ->requirePresence('po', 'create')
            ->notEmpty('po');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('special_request')
            ->requirePresence('special_request', 'create')
            ->notEmpty('special_request');

        $validator
            ->scalar('status')
            ->maxLength('status', 64)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));
        $rules->add($rules->existsIn(['urgency_id'], 'Urgencies'));
        $rules->add($rules->existsIn(['action_id'], 'Actions'));
        $rules->add($rules->existsIn(['servco_id'], 'Servcos'));

        return $rules;
    }
}
