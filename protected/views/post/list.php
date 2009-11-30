<h2>Post List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New Post',array('create')); ?>]
[<?php echo CHtml::link('Manage Post',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($models as $n=>$model): ?>
<div class="item">
<?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:
<?php echo CHtml::link($model->id,array('show','id'=>$model->id)); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('userId')); ?>:
<?php echo CHtml::encode($model->userId); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('amount')); ?>:
<?php echo CHtml::encode($model->amount); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('amountType')); ?>:
<?php echo CHtml::encode($model->amountType); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:
<?php echo CHtml::encode($model->description); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('createTime')); ?>:
<?php echo CHtml::encode($model->createTime); ?>
<br/>
<?php echo CHtml::encode($model->getAttributeLabel('updateTime')); ?>:
<?php echo CHtml::encode($model->updateTime); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>