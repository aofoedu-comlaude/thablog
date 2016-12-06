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
//debug($article);
?>
<?= $this->Html->link('Add post', ['controller' => 'Comments', 'action' => 'add', 12]) ?>
