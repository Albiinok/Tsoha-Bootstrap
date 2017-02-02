<?php

class GenreController extends BaseController {
    
    public static function index() {
        $genret = Genre::all();
        //Kint::dump($genret);
        
        View::make('genres/genrelista.html', array('genret' => $genret));
    }
    
    public static function store() {
        $params = $_POST;
        
        $genre = new Genre(array(
            'nimi' => $params['nimi']
        ));
        
        //Kint::dump($params);
        
        $genre->save();
        
        Redirect::to('/genrelist', array('message' => 'Genre lisätty!'));
    }
    
    public static function create() {
        View::make('genres/newgenre.html');
    }
}
