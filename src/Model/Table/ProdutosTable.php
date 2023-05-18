<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \App\Model\Table\CategoriasProdutosTable&\Cake\ORM\Association\BelongsTo $CategoriasProdutos
 * @property \App\Model\Table\UnidadesProdutosTable&\Cake\ORM\Association\BelongsTo $UnidadesProdutos
 * @property \App\Model\Table\VendaTable&\Cake\ORM\Association\HasMany $Venda
 *
 * @method \App\Model\Entity\Produto newEmptyEntity()
 * @method \App\Model\Entity\Produto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProdutosTable extends Table
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

        $this->setTable('produtos');
        $this->setDisplayField('nome_produto');
        $this->setPrimaryKey('id');

        $this->belongsTo('CategoriasProdutos', [
            'foreignKey' => 'categorias_produto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('UnidadesProdutos', [
            'foreignKey' => 'unidades_produto_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Venda', [
            'foreignKey' => 'produto_id',
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
            ->scalar('nome_produto')
            ->maxLength('nome_produto', 220)
            ->requirePresence('nome_produto', 'create')
            ->notEmptyString('nome_produto');

        $validator
            ->integer('categorias_produto_id')
            ->notEmptyString('categorias_produto_id');

        $validator
            ->integer('unidades_produto_id')
            ->notEmptyString('unidades_produto_id');

        $validator
            ->numeric('preco')
            ->requirePresence('preco', 'create')
            ->notEmptyString('preco');

        $validator
            ->boolean('perecivel')
            ->requirePresence('perecivel', 'create')
            ->notEmptyString('perecivel');

       
            
        $validator
            ->date('dt_fabricacao')
            ->notEmptyDate('dt_fabricacao');

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
        $rules->add($rules->existsIn('categorias_produto_id', 'CategoriasProdutos'), ['errorField' => 'categorias_produto_id']);
        $rules->add($rules->existsIn('unidades_produto_id', 'UnidadesProdutos'), ['errorField' => 'unidades_produto_id']);

        return $rules;
    }
}
