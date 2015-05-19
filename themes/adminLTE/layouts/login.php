<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\themes\adminLTE\assets\AdminlteAsset;
/* @var $this \yii\web\View */
/* @var $content string */

AdminlteAsset::register($this);
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

  <?php $this->beginBody() ?>
      <?php echo $content; ?>
  <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
