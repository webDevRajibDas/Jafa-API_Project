<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head', array('title' => lang('password_page_name'))); ?>

</head>
<body>

<?php $this->load->view('header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
		<?php $this->load->view('account/account_menu', array('current' => 'account_password')); ?>
		</div>
        
        
        <div class="col-md-10">

			<?php if ($this->session->flashdata('password_info')) : ?>
            <div class="alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $this->session->flashdata('password_info'); ?>
            </div>
			<?php endif; ?>

            <h2><?php echo lang('password_page_name'); ?></h2>

            <div class="well">
				<?php echo lang('password_safe_guard_your_account'); ?>
                <br><br>
            </div>
			
            
			<?php echo form_open(uri_string(), 'class="form-horizontal"'); ?>
			<?php echo form_fieldset(); ?>

            <div class="form-group <?php echo (form_error('password_new_password')) ? 'error' : ''; ?>">
                <label class="col-md-4 control-label" for="password_new_password"><?php echo lang('password_new_password'); ?></label>

                <div class="col-md-4">
					<?php echo form_password(array('name' => 'password_new_password', 'id' => 'password_new_password',  'class'=>'form-control', 'value' => set_value('password_new_password'), 'autocomplete' => 'off')); ?>
					<?php if (form_error('password_new_password'))
				{
					?>
                    <span class="help-block">
					<?php echo form_error('password_new_password'); ?>
					</span>
					<?php } ?>
                </div>
            </div>

            <div class="form-group <?php echo (form_error('password_retype_new_password')) ? 'error' : ''; ?>">
                <label class="col-md-4 control-label" for="password_retype_new_password"><?php echo lang('password_retype_new_password'); ?></label>

                <div class="col-md-4">
					<?php echo form_password(array('name' => 'password_retype_new_password', 'id' => 'password_retype_new_password',  'class'=>'form-control', 'value' => set_value('password_retype_new_password'), 'autocomplete' => 'off')); ?>
					<?php if (form_error('password_retype_new_password'))
				{
					?>
                    <span class="help-block">
					<?php echo form_error('password_retype_new_password'); ?>
					</span>
					<?php } ?>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary"><?php echo lang('password_change_my_password'); ?></button>
                </div>
                
            </div>

			<?php echo form_fieldset_close(); ?>
			<?php echo form_close(); ?>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>

</body>
</html>