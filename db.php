<?php

$tastes = [
    new Taste('Chicken'),
    new Taste('Salmon'),
    new Taste('Beef'),
    new Taste('Fish'),
    new Taste('Shrimp'),
    new Taste('Tuna')
];

$types = [
    new Type('Chewing'),
    new Type('Fetching'),
    new Type('Puzzle'),
    new Type('Swatting'),
    new Type('Jumping')
];

$materials = [
    new Material('Plastic'),
    new Material('Wood'),
    new Material('Fabric')
];

$products = [
    'food' => [
        [
            'category' => 'dog',
            'image' => 'food1.jpg',
            'name' => 'Dog Food',
            'description' => 'Premium dog food for all breeds',
            'availability' => 'In stock',
            'price' => 20,
            'weight' => 10,
            'type' => 'Dry',
            'age' => 'Adult',
            'taste' => [1, 3, 5]
        ],
        [
            'category' => 'cat',
            'image' => 'food2.jpg',
            'name' => 'Cat Food',
            'description' => 'Healthy cat food for all ages',
            'availability' => 'Out of stock',
            'price' => 15,
            'weight' => 5,
            'type' => 'Wet',
            'age' => 'Kitten',
            'taste' => [3, 4, 1]
        ]
    ],
    'games' => [
        [
            'category' => 'dog',
            'image' => 'game1.jpg',
            'name' => 'Interactive Toy',
            'description' => 'Engaging toy for dogs',
            'availability' => 'In stock',
            'price' => 30,
            'age' => 'Adult',
            'dimension' => '20 x 10',
            'type' => [1, 4, 3]
        ],
        [
            'category' => 'cat',
            'image' => 'game2.jpg',
            'name' => 'Feather Teaser',
            'description' => 'Interactive toy for cats',
            'availability' => 'In stock',
            'price' => 12,
            'age' => 'Kitten',
            'dimension' => '20 x 10',
            'type' => [2, 3]
        ]
    ],
    'kennels' => [
        [
            'category' => 'dog',
            'image' => 'kennel1.jpg',
            'name' => 'Plastic Dog Kennel',
            'description' => 'Durable and easy to clean dog kennel',
            'availability' => 'In stock',
            'price' => 80,
            'material' => [1],
            'dimension' => '50 x 80 x 50',
            'type' => 'Outdoor'
        ],
        [
            'category' => 'cat',
            'image' => 'kennel2.jpg',
            'name' => 'Wooden Cat House',
            'description' => 'Stylish cat house for indoor use',
            'availability' => 'Out of stock',
            'price' => 100,
            'material' => [3, 2],
            'dimension' => '30 x 40 x 40',
            'type' => 'Indoor'
        ]
    ]
];


$arrFood = [];
$arrGames = [];
$arrKennels = [];

//Ciclo sugli array food, games e kennels per popolarli con le istanze, ciclo anche sui loro array associati per estrarre l'index, in modo da utilizzando per richiamare i valori dentro $products

foreach ($products['food'] as $food) {
    $arrTaste = [];
    foreach ($food['taste'] as $index) {
        $arrTaste[] = $tastes[$index];
    }

    $arrFood[] = new Food(
        $food['category'],
        $food['image'],
        $food['name'],
        $food['description'],
        $food['availability'],
        $food['price'],
        $food['weight'],
        $food['type'],
        $food['age'],
        $arrTaste
    );
}

foreach ($products['games'] as $game) {
    $arrType = [];
    foreach ($game['type'] as $index) {
        $arrType[] = $types[$index];
    }

    $arrGames[] = new Game(
        $game['category'],
        $game['image'],
        $game['name'],
        $game['description'],
        $game['availability'],
        $game['price'],
        $game['age'],
        $game['dimension'],
        $arrType
    );
}

foreach ($products['kennels'] as $kennel) {
    $arrMaterials = [];
    foreach ($kennel['material'] as $index) {
        $arrMaterials[] = $materials[$index];
    }

    $arrKennels[] = new Kennel(
        $kennel['category'],
        $kennel['image'],
        $kennel['name'],
        $kennel['description'],
        $kennel['availability'],
        $kennel['price'],
        $arrMaterials,
        $kennel['dimension'],
        $kennel['type'],
    );
}


// $arrMovies = [];
// foreach ($dataMovie as $movie) {
// 	$movieGenres = [];
// 	foreach ($movie['genres'] as $index) {
// 		$movieGenres[] = $arrGenres[$index];
// 	}

// 	$arrMovies[] = new Movie(
// 		$movie['title'],
// 		$movie['year'],
// 		$movie['country'],
// 		$movie['language'],
// 		$movieGenres,
// 		$movie['img'],
// 	);
// }
