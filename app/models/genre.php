<?php

class Genre extends BaseModel {

    public $id, $nimi;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $q = DB::connection()->prepare('SELECT * FROM Genre');
        $q->execute();
        $rivit = $q->fetchAll();
        $genret = array();

        foreach ($genret as $g) {
            $genret[] = new Genre(array(
                'id' => $b['id'],
                'nimi' => $b['nimi']
            ));
        }

        return $genret;
    }

    public static function find($id) {
        $q = DB::connection()->prepare('SELECT * FROM Genre WHERE id = :id LIMIT 1');
        $q->execute(array('id' => $id));
        $rivi = $q->fetch();

        if ($rivi) {
            $genre = new Genre(array(
                'id' => $rivi['id'],
                'nimi' => $rivi['nimi']
            ));

            return $genre;
        }

        return null;
    }

    public function save() {
        $q = DB::connection()->prepare('INSERT INTO Genre (nimi) VALUES (:nimi) RETURNING id');
        $q->execute(array('nimi' => $this->nimi));
        $rivi = $q->fetch();
        Kint::trace();
        Kint::dump($rivi);
        //$this->id = $rivi['id'];
    }

}
