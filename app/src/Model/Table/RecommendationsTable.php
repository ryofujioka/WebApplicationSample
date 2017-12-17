<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recommendations Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BooksTable|\Cake\ORM\Association\BelongsTo $Books
 *
 * @method \App\Model\Entity\Recommendation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recommendation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recommendation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recommendation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation findOrCreate($search, callable $callback = null, $options = [])
 */
class RecommendationsTable extends Table
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

        $this->setTable('my_app.Recommendations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'Users_id'
        ]);
        $this->belongsTo('Books', [
            'foreignKey' => 'Books_id'
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmpty('name');

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
        $rules->add($rules->existsIn(['Users_id'], 'Users'));
        $rules->add($rules->existsIn(['Books_id'], 'Books'));

        return $rules;
    }
}
