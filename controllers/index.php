<?php

$tasks = $app['database']->selectAll('task');

require 'views/index.view.php';