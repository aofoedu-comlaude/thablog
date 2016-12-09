<table>
<?php foreach ($the_comments as $this_comment): ?>
            <tr>
                <td>
                    <h5><?= $this_comment->nickname ?>
                    <p><?= $this_comment->body ?></p>
                    <h6><?= $this_comment->created ?></h6>
                </td>
            </tr>
<?php endforeach; ?>
</table>
<textarea rows="5" cols="30" placeholder="Enter comment here...">
</textarea>
<br>
<?php

echo $this->Form->created();
echo $this->Form->input('nickname');
echo $this->Form->textarea('body');
echo $this->Form->button(__('Post Comment'));
echo $this->Form->end();

?>
<?php
//debug($article);
?>
<?= $this->Html->link('Add post', ['controller' => 'Comments', 'action' => 'add', $this_comment->id]) ?>
