<h1> <?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?> </small></p>

<?php
echo $this->Form->create($comment);
echo $this->Form->input('nickname');
echo $this->Form->textarea('body');
echo $this->Form->button(__('Post Comment'));
echo $this->Form->end();



?>
