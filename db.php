<?php

$arrTastes = [
    1 => 'Chicken',
    2 => 'Salmon',
    3 => 'Beef',
    4 => 'Fish',
    5 => 'Shrimp',
    6 => 'Tuna'
];

$types = [
    1 => 'Chewing',
    2 => 'Fetching',
    3 => 'Puzzle',
    4 => 'Swatting',
    5 => 'Jumping'
];

$materials = [
    1 => 'Plastic',
    2 => 'Wood',
    3 => 'Fabric'
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
            'taste' => ['Chicken', 'Beef', 'Fish']
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
            'taste' => ['Tuna', 'Salmon', 'Shrimp']
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
            'dimension' => 'Large',
            'type' => ['Chewing', 'Fetching', 'Puzzle']
        ],
        [
            'category' => 'cat',
            'image' => 'game2.jpg',
            'name' => 'Feather Teaser',
            'description' => 'Interactive toy for cats',
            'availability' => 'In stock',
            'price' => 12,
            'age' => 'Kitten',
            'dimension' => 'Small',
            'type' => ['Swatting', 'Jumping']
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
            'material' => ['Plastic'],
            'dimension' => 'Medium',
            'type' => 'Outdoor'
        ],
        [
            'category' => 'cat',
            'image' => 'kennel2.jpg',
            'name' => 'Wooden Cat House',
            'description' => 'Stylish cat house for indoor use',
            'availability' => 'Out of stock',
            'price' => 100,
            'material' => ['Wood', 'Fabric'],
            'dimension' => 'Small',
            'type' => 'Indoor'
        ]
    ]
];
