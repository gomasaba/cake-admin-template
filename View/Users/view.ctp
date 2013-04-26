<div class="row">
<div class="span7">
<h2><?php  echo __('User'); ?></h2>
	<table class="table">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<td>
				<?php echo h($user['User']['id']); ?>
			</td>
		</tr>
		<tr>
			<th><?php echo __('Account'); ?></th>
			<td>
				<?php echo h($user['User']['account']); ?>
			</td>
		</tr>
	</table>
</div>
<div class="span3">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
	
</div>
