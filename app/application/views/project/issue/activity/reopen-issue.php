<li id="comment<?php echo $activity->id; ?>" class="comment">
	<div class="insides">
		<div class="topbar">

			<div class="data">
				<label class="label important"><?php echo __('tinyissue.label_reopened'); ?></label> par/pour <strong><?php echo $user->firstname . ' ' . $user->lastname; ?></strong> 
				<span class="time">
					le <?php echo date('d/m/Y à G\hi', strtotime($activity->created_at)); ?>
				</span>		
		</div>
	</div>
</li>
