<?php

App\App::view('top', ['title' => $title]);

?>

<h1 class="welcome"><?= $welcome ?> </h1>
<!-- <img src="<?= URL ?>/horse.jpg" alt="horse" class="horse"> -->

<?php

App\App::view('bottom');