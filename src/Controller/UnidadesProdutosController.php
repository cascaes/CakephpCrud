<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UnidadesProdutos Controller
 *
 * @property \App\Model\Table\UnidadesProdutosTable $UnidadesProdutos
 * @method \App\Model\Entity\UnidadesProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadesProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $unidadesProdutos = $this->paginate($this->UnidadesProdutos);

        $this->set(compact('unidadesProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidades Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidadesProduto = $this->UnidadesProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('unidadesProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidadesProduto = $this->UnidadesProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $unidadesProduto = $this->UnidadesProdutos->patchEntity($unidadesProduto, $this->request->getData());
            if ($this->UnidadesProdutos->save($unidadesProduto)) {
                $this->Flash->success(__('The unidades produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidades produto could not be saved. Please, try again.'));
        }
        $this->set(compact('unidadesProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidades Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidadesProduto = $this->UnidadesProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidadesProduto = $this->UnidadesProdutos->patchEntity($unidadesProduto, $this->request->getData());
            if ($this->UnidadesProdutos->save($unidadesProduto)) {
                $this->Flash->success(__('The unidades produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidades produto could not be saved. Please, try again.'));
        }
        $this->set(compact('unidadesProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidades Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidadesProduto = $this->UnidadesProdutos->get($id);
        if ($this->UnidadesProdutos->delete($unidadesProduto)) {
            $this->Flash->success(__('The unidades produto has been deleted.'));
        } else {
            $this->Flash->error(__('The unidades produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
