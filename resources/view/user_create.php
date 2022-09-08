<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container-v2">
    <div class="content">
        <h2>New User</h2>
    </div>
    <div class="card-body">
        <form action="<?= URL ?>users/store" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
                <div class="error"><?= $error['name'] ?? ''?></div>
            </div>
            <div class="form-group">
                <label>Surname</label>
                <input type="text" class="form-control" name="surname">
                <div class="error"><?= $error['surname'] ?? ''?></div>
            </div>
            <div class="form-group">
                <label>Personal ID</label>
                <input type="text" class="form-control" name="pid">
                <div class="error"><?= $error['pid'] ?? '' ?></div>
            </div>
            <div class="form-group">
                <label>Account Number</label>
                <input type="text" name="accnumber" value="GB<?= rand(100000000000000000, 999999999999999999) ?>"
                    readonly>
                <input type="text" name="balance" value="0" readonly hidden>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
</div>


<?php
App\App::view('bottom');