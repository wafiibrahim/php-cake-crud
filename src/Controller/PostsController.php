<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
    public function index()
    {
        $postsTable = $this->getTableLocator()->get('Posts');
        $post = $postsTable->newEmptyEntity();

        if ($this->request->is('post')) {
            $post = $postsTable->patchEntity($post, $this->request->getData());
            if ($postsTable->save($post)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to add your post.'));
            }
        }

        $posts = $postsTable->find('all');
        $this->set(compact('posts', 'post'));
    }

    public function display($id = null)
    {
        $postsTable = $this->getTableLocator()->get('Posts');
        $post = $postsTable->get($id);

        $this->set(compact('post'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $postsTable = $this->getTableLocator()->get('Posts');
        $post = $postsTable->get($id);
        if ($postsTable->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function edit($id = null)
    {
        $postsTable = $this->getTableLocator()->get('Posts');
        $post = $postsTable->get($id);

        if ($this->request->is(['post', 'put'])) {
            $post = $postsTable->patchEntity($post, $this->request->getData());
            if ($postsTable->save($post)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Unable to update your post.'));
            }
        }

        $this->set(compact('post'));
    }
}
