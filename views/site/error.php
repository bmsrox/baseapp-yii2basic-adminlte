<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="error-page">
	<h2 class="headline text-yellow"> <?= $exception->statusCode; ?></h2>
    <div class="error-content">
      <h3><i class="fa fa-warning text-yellow"></i> Oops! <?= nl2br(Html::encode($message)) ?></h3>
      <p>
        The above error occurred while the Web server was processing your request.
        Please contact us if you think this is a server error. Thank you.
    </p>
</div><!-- /.error-content -->
</div><!-- /.error-page -->
