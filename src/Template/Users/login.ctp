<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Login</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->input('email'); ?>
			<?= $this->Form->input('password', array('type' => 'password')); ?>
			<?= $this->Form->submit('Login', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>