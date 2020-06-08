<?php

require 'function.php';

$database = require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::URI());
