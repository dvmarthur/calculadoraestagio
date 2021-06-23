<?php

    $router->get('inicio','PagesController@index');
    $router->post('inicio/create','PagesController@create');
    $router->post('inicio/delete','PagesController@delete');
?>