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

    class Petbed extends Product {

        public $tagliaCuccia;

        function __construct(string $title, float $price, string $img, Category|null $category = null, $tagliaCuccia = null) {
            parent::__construct($title, $price, $img, $category);
            $this->tagliaCuccia = $tagliaCuccia;
        }


    };

    $cani = new Category('Cani', '🐕');
    $gatti = new Category('Gatti', '🐈');

    $croccantiniCani = new Product(
        'croccantini per cani',
        59.99,
        'https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg',
        $cani
    );
    var_dump($croccantiniCani);

    $giocattoloCani = new Product(
        'giocattolo per cani',
        7.99,
        'img',
        $cani
    );
    var_dump($giocattoloCani);

    
    $prodottoCane = new Product(
        'prodotto per cani',
        10.99,
        'img',
        $cani
    );
    var_dump($prodottoCane);


    $cucciaCane = new Product(
        'cuccia per cani',
        24.99,
        'img',
        $cani
    );
    var_dump($cucciaCane);

    $tagliaCuccia = new PetBed(
        'taglia della cuccia',
        39.99,
        'img',
        $cani,
        'taglia XL'
    );
    var_dump($tagliaCuccia);

//Gatti
    $croccantiniGatti = new Product(
        'croccantini per gatti',
        29.99,
        'https://arcaplanet.vtexassets.com/arquivos/ids/286259/immagini_1200x120027.jpg?v=638205225704630000',
        $gatti
    );
    var_dump($croccantiniGatti);

    
    $giocattoloGatti = new Product(
        'giocattolo per gatti',
        4.99,
        'img',
        $gatti
    );
    var_dump($giocattoloGatti);

    
    $prodottoGatto = new Product(
        'prodotto per Gatto',
        10.99,
        'img',
        $gatti
    );
    var_dump($prodottoGatto);

    
    $cucciaGatto = new Product(
        'cuccia per gatto',
        19.99,
        'img',
        $gatti
    );
    var_dump($cucciaGatto);



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