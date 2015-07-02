<?php

$app->get('/auth/login', function() use ($app) {
    $app->render('auth/login.twig');
})->name('auth.login');

$app->post('/auth/login', function() use ($app) {
    // Attempt user authentication
});
