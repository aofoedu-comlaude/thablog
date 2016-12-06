<h2>Add Comment</h2>

<form method="post" action="/comments/add">
<?php

    echo $this->Form->create($comment);
    echo $this->Form->hidden('article_id');
    echo $this->Form->input('nickname');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Post Comment'));
    echo $this->Form->end();

?>
