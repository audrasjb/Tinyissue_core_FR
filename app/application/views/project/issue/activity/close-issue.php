<li id="comment<?php echo $activity->id; ?>" class="comment">
	<div class="insides">
		<div class="topbar">

			<div class="data">
				<label class="label success"><?php echo __('tinyissue.label_closed'); ?></label> <?php echo __('tinyissue.by'); ?> <strong><?php echo $user->firstname . ' ' . $user->lastname; ?></strong> 
				<span class="time">
					le <?php echo date('d/m/Y à G\hi', strtotime($activity->created_at)); ?>
				</span>
				<?php if(Project\Issue::current()->status == 0): ?>
				<a href="<?php echo Project\Issue::current()->to('status?status=1'); ?>" class="button success"><?php echo __('tinyissue.reopen'); ?></a>				
				<?php endif;?>
		</div>
	</div>
</li>
