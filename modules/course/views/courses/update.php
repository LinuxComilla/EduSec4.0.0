<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\course\models\Courses */

$this->title = 'Update Courses: ' . ' ' . $model->course_name;
$this->params['breadcrumbs'][] = ['label' => 'Course Management', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Manage Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->course_name, 'url' => ['view', 'id' => $model->course_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> Update Course</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	<?= Html::a('Back', ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
   </div>
</div>

<div class="courses-update">
      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
