<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::direct(Request::uri(), Request::method());

