<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Urgencies Controller
 *
 * @property \App\Model\Table\UrgenciesTable $Urgencies
 *
 * @method \App\Model\Entity\Urgency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UrgenciesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $urgencies = $this->paginate($this->Urgencies);

        $this->set(compact('urgencies'));
    }

    /**
     * View method
     *
     * @param string|null $id Urgency id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $urgency = $this->Urgencies->get($id, [
            'contain' => ['Dailyparts']
        ]);

        $this->set('urgency', $urgency);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $urgency = $this->Urgencies->newEntity();
        if ($this->request->is('post')) {
            $urgency = $this->Urgencies->patchEntity($urgency, $this->request->getData());
            if ($this->Urgencies->save($urgency)) {
                $this->Flash->success(__('The urgency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The urgency could not be saved. Please, try again.'));
        }
        $this->set(compact('urgency'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Urgency id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $urgency = $this->Urgencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $urgency = $this->Urgencies->patchEntity($urgency, $this->request->getData());
            if ($this->Urgencies->save($urgency)) {
                $this->Flash->success(__('The urgency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The urgency could not be saved. Please, try again.'));
        }
        $this->set(compact('urgency'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Urgency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $urgency = $this->Urgencies->get($id);
        if ($this->Urgencies->delete($urgency)) {
            $this->Flash->success(__('The urgency has been deleted.'));
        } else {
            $this->Flash->error(__('The urgency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
