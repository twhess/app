<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servcos Controller
 *
 * @property \App\Model\Table\ServcosTable $Servcos
 *
 * @method \App\Model\Entity\Servco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServcosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $servcos = $this->paginate($this->Servcos);

        $this->set(compact('servcos'));
    }

    /**
     * View method
     *
     * @param string|null $id Servco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servco = $this->Servcos->get($id, [
            'contain' => ['Dailyparts']
        ]);

        $this->set('servco', $servco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servco = $this->Servcos->newEntity();
        if ($this->request->is('post')) {
            $servco = $this->Servcos->patchEntity($servco, $this->request->getData());
            if ($this->Servcos->save($servco)) {
                $this->Flash->success(__('The servco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servco could not be saved. Please, try again.'));
        }
        $this->set(compact('servco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Servco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servco = $this->Servcos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servco = $this->Servcos->patchEntity($servco, $this->request->getData());
            if ($this->Servcos->save($servco)) {
                $this->Flash->success(__('The servco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servco could not be saved. Please, try again.'));
        }
        $this->set(compact('servco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Servco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servco = $this->Servcos->get($id);
        if ($this->Servcos->delete($servco)) {
            $this->Flash->success(__('The servco has been deleted.'));
        } else {
            $this->Flash->error(__('The servco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
