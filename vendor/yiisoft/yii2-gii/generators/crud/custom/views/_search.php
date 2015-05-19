<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">

    <?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>array('class'=>'form-inline')
    ]); ?>

<?php
/*$count = 0;
foreach ($generator->getColumnNames() as $attribute) {
    if (++$count < 6) {
        echo "    <?= " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    } else {
        echo "    <?php // echo " . $generator->generateActiveSearchField($attribute) . " ?>\n\n";
    }
}*/

         echo "<?= \$form->field(\$model, 'id', [
                'template'=>'{input}<span class=\"input-group-btn\"><button class=\"btn btn-warning btn-flat\" type=\"submit\"><i class=\"fa fa-search\"></i></button></span>',
                'options'=>['class'=>'input-group input-group-sm']])
                ->textInput(['placeholder'=>Yii::t('app', 'Search')]);
            ?>\n";
?>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
