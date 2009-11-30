
<h2>Register New User</h2>
<div class="yiiForm">
<p>
Fields with <span class="required">*</span> are required.
</p>

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($user); ?>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'fullname'); ?>
	<?php echo CHtml::activeTextField($user,'fullname',array('size'=>40,'maxlength'=>255)); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'username'); ?>
	<?php echo CHtml::activeTextField($user,'username',array('size'=>40,'maxlength'=>255)); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'password'); ?>
	<?php echo CHtml::activePasswordField($user,'password',array('size'=>40,'maxlength'=>255)); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'verificationPassword'); ?>
	<?php echo CHtml::activePasswordField($user,'verificationPassword',array('size'=>40,'maxlength'=>255)); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'email'); ?>
	<?php echo CHtml::activeTextField($user,'email',array('size'=>40,'maxlength'=>255)); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($user,'balance'); ?>
	<?php echo CHtml::activeTextField($user,'balance',array('size'=>40,'maxlength'=>255)); ?>
</div>

<?php if(extension_loaded('gd')): ?>
<div class="simple">
	<?php echo CHtml::activeLabel($user,'verificationCode'); ?>
	<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo CHtml::activeTextField($user,'verificationCode'); ?>
	</div>
	<p class="hint">Please enter the letters as they are shown in the image above.
	<br/>Letters are not case-sensitive.</p>
</div>
<?php endif; ?>

<div class="action">
<?php echo CHtml::submitButton('Submit'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->
