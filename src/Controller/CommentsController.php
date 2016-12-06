<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class CommentsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
    }

    public function index()
    {

        $comments = $this->Comments->find('all');
        $this->set(compact('comments'));

    }

    public function view($id)
    {
        $comment = $this->Comments->get($id);
        $this->set(compact('comment'));
    }

    public function add($articleId)
    {
        // debug($this->request);exit;
        $comment = $this->Comments->newEntity();
        if ($this->request->is('post'))
            {
            $comment = $this->Comments->patchEntity($comment, $this->request->data);
            $comment->user_id = $this->Auth->user('id');
            //debug($this->request);exit;
            if ($this->Comments->save($comment))
            {

                $this->Flash->success(__('Everyone\' got an opinion. Now you have one too!'));
                return $this->redirect(['action' => 'index']);

            }
            $this->Flash->error(__('My head is a bird. Your argument is invalid.'));
        }

        $this->set('comment', $comment);
        $this->set(compact('comment'));
        $this->set('_serialize', ['comment']);

    }

    public function beforeFilter(Event $event)
    {

        parent::beforeFilter($event);
        $this->Auth->allow('add', 'logout');

    }

    public function delete($id)
    {

        $this->request->allowMethod(['post', 'delete']);

        $comment = $this->comment->get($id);

        if ($this->Comments->delete($comment))
        {
            $this->Flash->success(__('Comment {0} deleted', h($id)));
            return $this->redirect(['action' => 'index']);
        }

    }


}

?>
