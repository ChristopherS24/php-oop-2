<?php
    
    class Category {

        public $name;
        public $icon;

        function __construct(string $name, string $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }
        
    }


    class Product {

        public $title;
        public $price;
        public $img;
        protected $category;

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
        'https://arcaplanet.vtexassets.com/arquivos/ids/260658/lovedi-gioco-cane-palla-con-punte-tpr-verde.jpg?v=637617645268130000',
        $cani
    );
    var_dump($giocattoloCani);

    
    $prodottoCane = new Product(
        'prodotto per cani',
        9.99,
        'https://arcaplanet.vtexassets.com/arquivos/ids/273231/perfect-shampoo-igienizzante-200ml.jpg?v=637922686092300000',
        $cani
    );
    var_dump($prodottoCane);


    $cucciaCane = new Product(
        'cuccia per cani',
        24.99,
        'https://img.kwcdn.com/product/fancy/543cff2a-4e48-4bad-bc0b-c2538eb4ad3a.jpg?imageView2/2/w/650/q/50/format/webp',
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
        'https://arcaplanet.vtexassets.com/arquivos/ids/291827/Kong-Cat-Xmas-Wrangler-Cactus-10170328.jpg?v=638355674306070000',
        $gatti
    );
    var_dump($giocattoloGatti);

    
    $prodottoGatto = new Product(
        'prodotto per Gatto',
        8.99,
        'https://arcaplanet.vtexassets.com/arquivos/ids/283685/a277b71142c0147396b01375c7d0bcbfce9ddd7a_419b5499ba6d59a6c0d4d591f1a3e102d99a6a5f--1-.jpg?v=638168013942000000',
        $gatti
    );
    var_dump($prodottoGatto);

    
    $cucciaGatto = new Product(
        'cuccia per gatto',
        29.99,
        'https://arcaplanet.vtexassets.com/arquivos/ids/265864/trixie-cuccia-igloo-tipi-per-gatto.jpg?v=637743794566200000',
        $gatti
    );
    var_dump($cucciaGatto);

    $products = [
        $croccantiniCani,
        $giocattoloCani,
        $prodottoCane,
        $cucciaCane,
        $croccantiniGatti,
        $giocattoloGatti,
        $prodottoGatto,
        $cucciaGatto
    ];



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

    <header>
        <div class="text-center">
            <h1>
                php-oop-2 Shop
            </h1>
        </div>
        <hr>
    </header>
    
    <main>

    <div class="container">
        <div class="row g-3">
            <?php
                foreach ($products as $product) {
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $product->img; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                    <div class="card-body">
                        <h3>
                            <?php echo $product->title; ?>
                        </h3>
                        <h5>
                            €<?php echo $product->price; ?>
                        </h5>
                        <h6>
                            <?php echo $product->getCategory()->name; ?>
                            <?php echo $product->getCategory()->icon; ?>
                        </h6>
                    </div>
                </div>

            </div>
            <?php
                }
            ?>

        </div>
    </div>

    </main>
        

    </body>
</html>
