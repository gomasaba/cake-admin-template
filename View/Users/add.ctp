<div class="row">
<div class="span7">
<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
    <fieldset>
        <legend>User Add</legend>
        <?php echo $this->Form->input('account', array(
            'label' => 'account',
            'type' => 'text',
            'class' => 'span2',
        )); ?>
        <?php echo $this->Form->input('password', array(
            'label' => 'password',
            'type' => 'password',
            'class' => 'span2',
        )); ?>
        <div class="form-actions">
        <?php echo $this->Form->submit('Save changes', array(
            'div' => false,
            'class' => 'btn btn-primary',
        )); ?>
        </div>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
	
</div>
