<h3>Form Login</h3>
<form method="POST" action="controllers/memberController.php">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <div class="input-group">
            <input class="form-control" name="password" type="password" placeholder="Password" id="pass" autocomplete="off" required>
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <a class="text-dark" id="icon-click">
                        <i class="fas fa-eye" id="icon"></i></a>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>