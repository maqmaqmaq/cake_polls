<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UsersPolls Controller
 *
 * @property \App\Model\Table\UsersPollsTable $UsersPolls
 *
 * @method \App\Model\Entity\UsersPoll[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersPollsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Polls', 'Users'],
        ];
        $usersPolls = $this->paginate($this->UsersPolls);

        $this->set(compact('usersPolls'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Poll id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersPoll = $this->UsersPolls->get($id, [
            'contain' => ['Polls', 'Users'],
        ]);

        $this->set('usersPoll', $usersPoll);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersPoll = $this->UsersPolls->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersPoll = $this->UsersPolls->patchEntity($usersPoll, $this->request->getData());
            if ($this->UsersPolls->save($usersPoll)) {
                $this->Flash->success(__('The users poll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users poll could not be saved. Please, try again.'));
        }
        $polls = $this->UsersPolls->Polls->find('list', ['limit' => 200]);
        $users = $this->UsersPolls->Users->find('list', ['limit' => 200]);
        $this->set(compact('usersPoll', 'polls', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Poll id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersPoll = $this->UsersPolls->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersPoll = $this->UsersPolls->patchEntity($usersPoll, $this->request->getData());
            if ($this->UsersPolls->save($usersPoll)) {
                $this->Flash->success(__('The users poll has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users poll could not be saved. Please, try again.'));
        }
        $polls = $this->UsersPolls->Polls->find('list', ['limit' => 200]);
        $users = $this->UsersPolls->Users->find('list', ['limit' => 200]);
        $this->set(compact('usersPoll', 'polls', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Poll id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersPoll = $this->UsersPolls->get($id);
        if ($this->UsersPolls->delete($usersPoll)) {
            $this->Flash->success(__('The users poll has been deleted.'));
        } else {
            $this->Flash->error(__('The users poll could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
