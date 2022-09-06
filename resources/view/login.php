<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container-v2">
    <div class="content">
        <h2>Login</h2>
    </div>
    <div class="card-body">
        <form action="<?= URL ?>login" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</div>


<?php
App\App::view('bottom');