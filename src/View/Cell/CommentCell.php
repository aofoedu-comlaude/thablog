<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Comment cell
 */
class CommentCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */

    public function display($article)
    {

        // $this->loadModel('Comments');
        // $section = $this->Comments->find('body')->order(['id' => 'ASC']);
//debug($article);
        $this->loadModel('Comments');
        $allcomments = $this->Comments->find();
        $comments = $allcomments->toArray();
        $this->set('the_comments', $comments); 

    }
}
