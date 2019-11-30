<?php
$id = Yii::$app->request->get('id');
echo 'customer :'.(isset($id)? $id:'0');