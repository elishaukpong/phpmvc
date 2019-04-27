<?php

$database = require 'bootstrap.php';


$tasks = $database->selectAll('task');

require 'index.view.php';