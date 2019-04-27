<?php

$query = require 'bootstrap.php';


$tasks = $query->selectAll('task');

require 'index.view.php';