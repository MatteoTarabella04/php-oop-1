<?php
include_once __DIR__ . "./Genre.php";

class Movie
{
   public $name;
   public $description;
   public $poster;
   public $genre;

   public function __construct(string $name, string $description, string $poster, Genre $genre)
   {
      $this->name = $name;
      $this->description = $description;
      $this->poster = $poster;
      $this->genre = $genre;
   }

   public function getGenre()
   {
      return $this->genre;
   }
}