<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    // public function index()
    // {
    //     $this->paginate = [
    //         'contain' => ['Users', 'Rooms'],
    //     ];
    //     $messages = $this->paginate($this->Messages);

    //     $this->set(compact('messages'));
    // }

    /**
     * View method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $message = $this->Messages->get($id, [
            'contain' => ['Users', 'Rooms'],
        ]);

        $this->set(compact('message'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    // public function add()
    // {
    //     $message = $this->Messages->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $message = $this->Messages->patchEntity($message, $this->request->getData());
    //         if ($this->Messages->save($message)) {
    //             $this->Flash->success(__('The message has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The message could not be saved. Please, try again.'));
    //     }
    //     $users = $this->Messages->Users->find('list', ['limit' => 200]);
    //     $rooms = $this->Messages->Rooms->find('list', ['limit' => 200]);
    //     $this->set(compact('message', 'users', 'rooms'));
    // }

    /**
     * Edit method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function edit($id = null)
    // {
    //     $message = $this->Messages->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $message = $this->Messages->patchEntity($message, $this->request->getData());
    //         if ($this->Messages->save($message)) {
    //             $this->Flash->success(__('The message has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The message could not be saved. Please, try again.'));
    //     }
    //     $users = $this->Messages->Users->find('list', ['limit' => 200]);
    //     $rooms = $this->Messages->Rooms->find('list', ['limit' => 200]);
    //     $this->set(compact('message', 'users', 'rooms'));
    // }

    /**
     * Delete method
     *
     * @param string|null $id Message id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $message = $this->Messages->get($id);
    //     if ($this->Messages->delete($message)) {
    //         $this->Flash->success(__('The message has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The message could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
