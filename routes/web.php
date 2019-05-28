<?php

Router::get('', 'PagesController@home');
Router::get('about', 'PagesController@about');
Router::get('contact', 'PagesController@contact');
Router::post('names', 'controllers/add-name.php');