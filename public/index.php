<?php
use App\App;

define('DIR', __DIR__.'/../');
define('URL', 'http://bank.v2/');

require DIR . 'vendor/autoload.php';

App::start();