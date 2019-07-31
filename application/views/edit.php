<?php $this->load->view('header') ?>
<div class="col-lg-4 offset-lg-4">
    <h1>Edit</h1>
    <?php alerts() ?>
    <form method="post">
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" name="name" id="name" value="<?php echo set_value('name', $name ?? null) ?>" class="form-control <?php echo is_valid('name') ?>">
            <?php echo form_error('name') ?>
        </div>
        <div class="form-group">
            <label for="username">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" value="<?php echo set_value('subtitle', $subtitle ?? null) ?>" class="form-control <?php echo is_valid('subtitle') ?>">
            <?php echo form_error('subtitle') ?>
        </div>
        <div class="form-group">
            <label for="username">Description</label>
            <input type="text" name="description" id="description" value="<?php echo set_value('description', $description ?? null) ?>" class="form-control <?php echo is_valid('description') ?>">
            <?php echo form_error('description') ?>
        </div>
        <hr class="my-5">
        <div class="form-group">
            <label for="username">Theme</label>
            <select class="form-control">
                <option>Black Room</option>
                <option>Multipass</option>
                <option>White Steps</option>
                <option>Windowed</option>
                <option>Daydream</option>
            </select>
            <?php echo form_error('image') ?>
        </div>
        <div class="form-group">
            <label for="username">Image</label>
            <input type="text" name="image" id="image" value="<?php echo set_value('image', $image ?? null) ?>" class="form-control <?php echo is_valid('image') ?>">
            <?php echo form_error('image') ?>
        </div>
        <div class="form-group">
            <label for="username">Background</label>
            <input type="text" name="background" id="background" value="<?php echo set_value('background', $background ?? null) ?>" class="form-control <?php echo is_valid('background') ?>">
            <?php echo form_error('background') ?>
        </div>
        <hr class="my-5">
        <div class="form-group">
            <label for="username">Spotify</label>
            <input type="text" name="spotify" id="spotify" value="<?php echo set_value('spotify', $spotify ?? null) ?>" class="form-control <?php echo is_valid('spotify') ?>">
            <?php echo form_error('spotify') ?>
        </div>
        <div class="form-group">
            <label for="username">Soundcloud</label>
            <input type="text" name="soundcloud" id="soundcloud" value="<?php echo set_value('soundcloud', $soundcloud ?? null) ?>" class="form-control <?php echo is_valid('soundcloud') ?>">
            <?php echo form_error('soundcloud') ?>
        </div>
        <div class="form-group">
            <label for="username">Instagram</label>
            <input type="text" name="instagram" id="instagram" value="<?php echo set_value('instagram', $instagram ?? null) ?>" class="form-control <?php echo is_valid('instagram') ?>">
            <?php echo form_error('instagram') ?>
        </div>
        <div class="form-group">
            <label for="username">Twitter</label>
            <input type="text" name="twitter" id="twitter" value="<?php echo set_value('twitter', $twitter ?? null) ?>" class="form-control <?php echo is_valid('twitter') ?>">
            <?php echo form_error('twitter') ?>
        </div>
        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>
</div>
<?php $this->load->view('footer') ?>
