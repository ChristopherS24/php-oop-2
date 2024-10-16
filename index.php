<?php
    
    class Category {

        private $name;
        private $icon;

        function __construct(string $name, string $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }
        
    }


    class Product {

        public $title;
        private $price;
        public $img;
        private $category;

        function __construct(string $title, float $price, string $img, Category|null $category = null) {
            $this->title = $title;
            $this->price = $price;
            $this->img = $img;
            $this->setCategory($category);
        }

        public function getCategory() {
            return $this->category;
        }

        public function setCategory(Category|null $category) {
            $this->category = $category;
        }

    }

    $cani = new Category('Cani', '🐕');
    $gatti = new Category('Gatti', '🐈');


    //$products = [
        //$croccantiniCane,
        //$giocattoliCane,
        //$giocoCane,
        //$cucciaCane,
        //$croccantiniGatto,
        //$giocattoliGatto,
        //$giocoGatto,
        //$cucciaGatto
    //];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-2</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        

    </body>
</html>