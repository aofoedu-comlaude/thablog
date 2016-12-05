<?php

namespace App\Controller;

use App\Controller\AppController;

class CommentsController extends AppController
{

    public function initialize(array $config)
    {

        $this->Paginate = [
            'contain' => ['Parent']
        ]

    }

    public function add()
    {

        $category = $this->Comments
        $category = $this->Comments->newEntity();
        if ($this->request->is('post'))
        {
            $comment = $this->Comments->patchEntity()
        }

    }

}

?>
