<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Urgencies Model
 *
 * @property \App\Model\Table\DailypartsTable|\Cake\ORM\Association\HasMany $Dailyparts
 *
 * @method \App\Model\Entity\Urgency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Urgency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Urgency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Urgency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Urgency|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Urgency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Urgency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Urgency findOrCreate($search, callable $callback = null, $options = [])
 */
class UrgenciesTable extends Table
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

        $this->setTable('urgencies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Dailyparts', [
            'foreignKey' => 'urgency_id'
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
            ->scalar('option_name')
            ->maxLength('option_name', 64)
            ->requirePresence('option_name', 'create')
            ->notEmpty('option_name');

        return $validator;
    }
}
