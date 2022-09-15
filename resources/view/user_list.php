<?php
App\App::view('top', ['title' => $title]);
?>
        <?php foreach($users as $user) : ?>
            <?php if(isset($leftover) && $user['id'] == $leftover) : ?>
            <div class="error-location">
                <div class="error-delete"><?=$error['show'] ?? '' ?></div>
            </div>
            <?php endif ?>
            <?php endforeach ?>
<div class="container-v2">
    <div class="content">
        <h2>User List</h2>
    </div>
    <div class="card-body">
        <div class="list-group">
            <?php foreach($users as $user) : ?>
            <div class="line">
                <div class="line_content">

                    <div class="content_name">
                        <?= $user['name']?>
                    </div>
                    <div class="content_surname">
                        <?= $user['surname'] ?>
                    </div>
                    <div class="content_id">
                        ID <?= $user['pid'] ?>
                    </div>
                    <div class="content_acc">
                        <?= $user['accnumber'] ?>
                    </div>
                    <div class="content_balance">
                        £ <?= $user['balance'] ?>
                    </div>

                </div>

                <div class="line_buttons">
                    <a href="<?= URL.'users/edit/'.$user['id'] ?>" type="button" class="btn">Edit</a>
                    <form action="<?= URL ?>users/delete/<?=$user['id']?>" method="post">
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php
App\App::view('bottom');