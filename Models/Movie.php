<?php
include_once __DIR__ . "./Genre.php";

class Movie
{
   public $name;
   public $description;
   public $genre;

   public function __construct(string $name, string $description, Genre $genre)
   {
      $this->name = $name;
      $this->description = $description;
      $this->genre = $genre;
   }
}