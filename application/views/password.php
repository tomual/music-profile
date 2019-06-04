<?php $this->load->view('header') ?>
<div class="col-lg-4 offset-lg-4">
    <h1>Enter Password</h1>
    <?php alerts() ?>
    <form method="post">
        <div class="form-group">
            <label for="username">Password</label>
            <input type="password" name="password" id="password" value="<?php echo set_value('password', $password) ?>" class="form-control <?php echo is_valid('password') ?>">
            <?php echo form_error('password') ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Continue" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $this->load->view('footer') ?>
