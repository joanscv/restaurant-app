<?php

namespace Model;


class Mesas extends ActiveRecord {
    protected static $tabla = 'mesas';
    protected static $columnasDB = ['id', 'disponibilidad', 'capacidad'];

    public $id;
    public $disponibilidad;
    public $capacidad;

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? null;
        $this->disponibilidad = $args['disponiblidad'] ?? '1';
        $this->capacidad = $args['capacidad'] ?? '';
    }
}