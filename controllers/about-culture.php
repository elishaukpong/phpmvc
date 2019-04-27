<?php

$tasks = $database->selectAll('task');

require 'views/about-culture.view.php';