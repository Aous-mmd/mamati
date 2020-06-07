<div class="container">
    <form method="post" action="<?= site_url('MY_Admin/update/'.$id); ?>">
        <div class="form-group">
            <label for="Username">Your Old Username: <?= $name; ?></label>
            <input type="text" name="user_name" class="form-control" id="Username" placeholder="Enter your new username" required>
        </div>
        <div class="form-group">
            <label for="user_email">Your Old Email: <?= $email; ?></label>
            <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Enter your new email" required>
        </div>
        <div class="form-group">
            <label for="user_password">Your Old Password: <?= $pass; ?></label>
            <input type="text" name="user_password" class="form-control" id="user_password" placeholder="Enter your new password" required>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</div>