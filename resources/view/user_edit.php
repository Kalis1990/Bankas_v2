<?php
App\App::view('top', ['title' => $title]);
?>

<div class="container-v2">
    <div class="content">
        <h2>Edit User</h2>
    </div>
    <div class="card-body">
        <div>
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
                <input type="text" class="form-control" name="balance" value="<?=$user['balance']?>" readonly>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        </div>
        <div class="list">
        <form action="<?= URL ?>users/addmoney/<?= $user['id'] ?>" method="post">
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" name="balance" value="">
            </div>
            <button type="submit" class="btn">Add</button>
        </form>
        </div>
        <div class="list">
        <form action="<?= URL ?>users/deductmoney/<?= $user['id'] ?>" method="post">
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" name="balance" value="">
            </div>
            <button type="submit" class="btn">Deduct</button>
        </form>
        </div>
       
    </div>
</div>


<?php
App\App::view('bottom');