<?php $this->load->view('header') ?>
<div class="col-lg-4 offset-lg-4">
    <h1>Enter Password</h1>
    <?php alerts() ?>
    <form method="post">
        <div class="form-group">
            <label for="username">Password</label>
            <input type="password" name="passphrase" id="passphrase" value="<?php echo set_value('passphrase', $passphrase) ?>" class="form-control <?php echo is_valid('passphrase') ?>">
            <?php echo form_error('passphrase') ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Continue" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $this->load->view('footer') ?>
