<h1>Add Article</h2>

<form method="post" action="/articles/add">
<?php

    echo $this->Form->create($article);
    echo $this->Form->input('category_id');
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);

    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();

?>
