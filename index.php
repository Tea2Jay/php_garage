<?php

require 'function.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::URI(), Request::method());
