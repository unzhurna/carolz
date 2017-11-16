<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <form action="<?php echo current_url(); ?>" method="post">
                <div class="card-body">
                    <?php if($this->session->flashdata('succes')): ?>
                        <div class="alert alert-dismissible alert-info">
                            <button class="close" type="button" data-dismiss="alert">×</button>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('succes'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('error')): ?>
                        <div class="alert alert-dismissible alert-danger">
                            <button class="close" type="button" data-dismiss="alert">×</button>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label class="control-label">Name<small class="text-danger">*</small></label>
                        <input class="form-control" type="text" name="name" value="<?php echo get_user('name'); ?>" placeholder="Enter full name">
                        <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Username<small class="text-danger">*</small></label>
                        <input class="form-control" type="text" name="username" value="<?php echo get_user('username'); ?>" placeholder="Enter full name">
                        <?php echo form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email<small class="text-danger">*</small></label>
                        <input class="form-control" type="email" name="email" value="<?php echo get_user('email'); ?>" placeholder="Enter email address">
                        <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="password" name="password" placeholder="Enter new password">
                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="password" name="password_confirm" placeholder="Confirm new password">
                                <?php echo form_error('password_confirm', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Gender</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender">Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender">Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Identity Proof</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept the terms and conditions
                            </label>
                        </div>
                    </div> -->
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                            <button class="btn btn-primary icon-btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Update</button>
                            <a class="btn btn-default icon-btn" href="<?php echo site_url('welcome'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
