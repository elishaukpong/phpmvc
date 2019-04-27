<?php

require 'Task.php';
require 'function.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';


$tasks = (new QueryBuilder(Connection::make()))->selectAll('task');

require 'index.view.php';