<?php

require 'function.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::URI(), Request::method());
