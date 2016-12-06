<?php for ($i=0;$i<$the_comments;$i++): ?>
        <table>
            <tr>
                <td>
                    <p>abc</p>
                </td>
            </tr>
        </table>
<?php endfor; ?>
<textarea rows="5" cols="30" placeholder="Enter comment here...">
</textarea>
<br>
<?= $this->Html->link('Add post', ['action' => 'add']) ?>
