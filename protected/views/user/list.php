<h2>User List</h2>

<div class="actionBar">
[<?php echo CHtml::link('New User',array('create')); ?>]
[<?php echo CHtml::link('Manage User',array('admin')); ?>]
</div>

<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>

<?php foreach($users as $n=>$user): ?>
<div class="item">
<?php echo CHtml::encode($user->getAttributeLabel('id')); ?>:
<?php echo CHtml::link($user->id,array('show','id'=>$user->id)); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('username')); ?>:
<?php echo CHtml::encode($user->username); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('email')); ?>:
<?php echo CHtml::encode($user->email); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('password')); ?>:
<?php echo CHtml::encode($user->password); ?>z
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('fullname')); ?>:
<?php echo CHtml::encode($user->fullname); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('balance')); ?>:
<?php echo CHtml::encode($user->balance); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('verified')); ?>:
<?php echo $user->verified?'true':'false' ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('createTime')); ?>:
<?php echo CHtml::encode($user->createTime); ?>
<br/>
<?php echo CHtml::encode($user->getAttributeLabel('updateTime')); ?>:
<?php echo CHtml::encode($user->updateTime); ?>
<br/>

</div>
<?php endforeach; ?>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>
