<?php

    $router->get('','PagesController@index');
    $router->post('anotacao/create','PagesController@create');
    $router->post('anotacao/delete','PagesController@delete');
?>