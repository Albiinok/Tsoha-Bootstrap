<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
      View::make('/suunnitelmat/login.html');
    }

    public static function sandbox(){
      // Testaa koodiasi täällä
      View::make('helloworld.html');
    }
    
    public static function genre() {
        View::make('/suunnitelmat/genre.html');
    }
    
    public static function lisaakeikka() {
        View::make('/suunnitelmat/lisaakeikka.html');
    }
    
    public static function keikat() {
        View::make('/suunnitelmat/keikkalistaband.html');
    }
    
    public static function etusivu() {
        View::make('/suunnitelmat/etusivu.html');
    }
    
    public static function keikkapaikat() {
        View::make('/suunnitelmat/keikkapaikkalista.html');
    }
    
    public static function keikkapaikka() {
        View::make('/suunnitelmat/keikkapaikkasivu.html');
    }
    
    public static function genrelista() {
        View::make('/suunnitelmat/genrelista.html');
    }
  }
