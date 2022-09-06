<?php

App\App::view('top', ['title' => $title]);

?>

<h1 class="welcome"><?= $welcome ?> </h1>

<?php

App\App::view('bottom');