<?php 

use Services\FileStorage;

$store = new FileStorage();
$arrData = [
    [
        'id' => 11, 
        'name' => 'Ролл Филадельфия', 
        'description' => 'рис, лосось, сливочный сыр, водоросли нори, огурец.',
        'image' => "./img/fila.png",
        'weigth' => 400, 
        'price' => 350,
    ],
    [
        'id' => 12, 
        'name' => 'Ролл Калифорния', 
        'description' => 'нори, рис для суши, японский хрен васаби, свежий огурец, мякоть авокадо, крабовое мясо.',
        'image' => "./img/kali.png",
        'weigth' => 380, 
        'price' => 320,
    ],
    [
        'id' => 13,
        'name' => 'Ролл Лава с лососем', 
        'description' => 'краб, лосось, сыр сливочный,лук зелёный, соус лава.',
        'image' => "./img/lavaroll.png",
        'weigth' => 310, 
        'price' => 330,
    ]
];
    
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);