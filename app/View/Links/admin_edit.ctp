<div class="admin-center-block clearfix">
	<div class="hor-space">		
		<div class="links form  container-fluid thumbnail"> 
			<?php echo $this->Form->create('Link', array('class' => 'form-large-fields form-horizontal', 'url' => array('controller' => 'links', 'action' => 'edit', 'menu' => $menuId)));?>
			<fieldset>
				<div class="panel-container">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a data-toggle="tab" href="#link-basic"><span><i class="icon-th-list blackc"></i><?php echo __l('Link'); ?></span></a></li>
						<li><a data-toggle="tab" href="#link-misc"><span><i class="icon-plus-sign"></i><?php echo __l('Misc.'); ?></span></a></li>
						<?php echo $this->Layout->adminTabs(); ?>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div id="link-basic" class="tab-pane fade in active">
							<?php echo $this->Form->input('id');
							echo $this->Form->input('menu_id');
							echo $this->Form->input('parent_id', array('label' => __l('Parent'), 'options' => $parentLinks, 'empty' => __l('Please Select')));
							echo $this->Form->input('title');
							echo $this->Form->input('link');?>
							<div class="submit-block info">
								<?php echo $this->Html->link('<i class="icon-plus-sign"></i>'.__l('Link to a Node'), Router::url(array('controller' => 'nodes', 'action' => 'index', 'links' => 1), true), array('data-toggle' =>'modal', 'data-target' => '#js-ajax-modal', 'escape' => false)); ?>
							</div>
							<?php echo $this->Form->input('status', array('label' => __l('Publish?'))); ?> 
						</div>
						<div id="link-misc" class="tab-pane fade">
							<?php echo $this->Form->input('class', array('class' => 'slug'));
							echo $this->Form->input('description', array('type' => 'text', 'label' => __l('Tooltip')));
							echo $this->Form->input('rel');
							echo $this->Form->input('target');?>
						</div>
					</div>
					<?php echo $this->Layout->adminTabs(); ?> 
				</div>
			</fieldset>
			<div class="submit-block clearfix"> <?php echo $this->Form->submit(__l('Save')); ?>
				<?php echo $this->Html->link(__l('Cancel'), array('action' => 'index', $menuId),array('class'=>'btn hor-smspace')); ?> 
			</div>
			<?php  echo $this->Form->end(); ?>
		</div>
		<div class="modal hide fade" id="js-ajax-modal">
		  <div class="modal-header">
		    <button type="button" class="close js-no-pjax" data-dismiss="modal" aria-hidden="true">&times;</button>
		    <h2><?php echo __l('Link to a Node'); ?></h2>
		  </div>
		  <div class="modal-body"></div>
		  <div class="modal-footer">
		    <a href="#" class="btn js-no-pjax" data-dismiss="modal"><?php echo __l('Close'); ?></a>
		  </div>
		</div>
</div>
</div>