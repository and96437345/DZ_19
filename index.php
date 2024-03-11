<?php

// ДЗ
// Написать класс File с полями: имя, тип, размер.
// Реализовать конструктор и __toString.
// Написать класс Archieve(наследник File) с доп. полями:
// степень сжатия(в процентах), хэш(строка).
// Реализовать конструктор и __toString.

class File {

    public $name;
    public $type;
    public $volume;

    function __construct (string $name, string $type, float $volume) {
        $this->name = $name;
        $this->type = $type;
        $this->volume = $volume;
    }

    function __toString(): String {
        return "Имя файла: $this->name\nТип файла: $this->type\nРазмер файла: $this->volume MB\n";
    }

}

class Archieve extends File {

    public $compress;
    public $hash;

    function __construct(string $name, string $type, int $volume, float $compress, string $hash) {
            parent::__construct($name, $type, $volume);
            $this->compress = $compress;
            $this->hash = $hash;
    }

    function __toString(): String {
        return parent::__toString() . "Степень сжатия: $this->compress %\nХэш: $this->hash\n";
    }   

}