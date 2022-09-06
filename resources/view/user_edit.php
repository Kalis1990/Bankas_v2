<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container-v2">
    <div class="content">
        <h2>Edit User</h2>
    </div>
    <div class="card-body">
        <form action="<?= URL ?>users/update/<?=$user['id']?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?=$user['name']?>">
            </div>
            <div class="form-group">
                <label>Surname</label>
                <input type="text" class="form-control" name="surname" value="<?=$user['surname']?>">
            </div>
            <div class="form-group">
                <label>Personal ID</label>
                <input type="text" class="form-control" name="pid" value="<?=$user['pid']?>" readonly>
            </div>
            <div class="form-group">
                <label>Account Number</label>
                <input type="text" class="form-control" name="accnumber" value="<?=$user['accnumber']?>" readonly>
                
            </div>
            <div class="form-group">
                <label>Balance</label>
                <input type="text" class="form-control" name="balance" value="<?=$user['balance']?>">
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</div>


<?php
App\App::view('bottom');