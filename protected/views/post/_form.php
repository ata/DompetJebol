<div class="yiiForm">

<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">
<?php echo CHtml::activeLabelEx($model,'userId'); ?>
<?php echo CHtml::activeTextField($model,'userId'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'amount'); ?>
<?php echo CHtml::activeTextField($model,'amount'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'amountType'); ?>
<?php echo CHtml::activeTextField($model,'amountType'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'description'); ?>
<?php echo CHtml::activeTextField($model,'description',array('size'=>60,'maxlength'=>140)); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'createTime'); ?>
<?php echo CHtml::activeTextField($model,'createTime'); ?>
</div>
<div class="simple">
<?php echo CHtml::activeLabelEx($model,'updateTime'); ?>
<?php echo CHtml::activeTextField($model,'updateTime'); ?>
</div>

<div class="action">
<?php echo CHtml::submitButton($update ? 'Save' : 'Create'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->