<?php

/* @var $this yii\web\View */
/* @var $messages \app\models\Message[] */

$this->title = 'Show';
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Ид</th>
        <th>Код</th>
        <th>Тип</th>
        <th>Приложение (application)</th>
        <th>Сообщение</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message) { ?>
        <tr>
            <th scope="row"><?= $message->id ?></th>
            <th><?= $message->code ?></th>
            <th><?= $message->type ?></th>
            <th><?= $message->application ?></th>
            <th><?= $message->message ?></th>
        </tr>
    <?php } ?>
    </tbody>
</table>