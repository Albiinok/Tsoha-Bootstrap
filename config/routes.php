<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

  $routes->get('/genre', function() {
      HelloWorldController::genre(); 
  });
  
  $routes->get('/lisaakeikka', function() {
      HelloWorldController::lisaakeikka(); 
  });
  
  $routes->get('/keikat', function() {
      HelloWorldController::keikat(); 
  });
  
  $routes->get('/etusivu', function() {
      HelloWorldController::etusivu(); 
  });
  
  $routes->get('/keikkapaikat', function() {
      HelloWorldController::keikkapaikat(); 
  });
  
  $routes->get('/keikkapaikka', function() {
      HelloWorldController::keikkapaikka(); 
  });
  
  $routes->get('/genrelista', function() {
      HelloWorldController::genrelista(); 
  });
  
  $routes->get('/bandi', function() {
      HelloWorldController::bandi(); 
  });
  
  $routes->get('/genrelist', function() {
      GenreController::index();
  });
  
  $routes->post('/genres', function() {
      GenreController::store();
  });
  
  $routes->get('/genres/new', function() {
      GenreController::create();
  });