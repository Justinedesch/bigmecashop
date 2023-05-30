<?php

function get_produits() {
    return [
        "aerial" => [
            'titre' => 'Aerial',
            'photo' => 'https://media.cdnws.com/_i/58934/14060/1953/60/bans63030-0.jpg',
            'prixHT' => 27,
            'promotion' => 0,
            'disponnibilite' => true,
        ],
        "lfrit" => [
            'titre' => 'Lfrit',
            'photo' => 'https://riseofgunpla.com/wp-content/uploads/2022/06/HG-Gundam-Lfrith-the-witch-from-mercury-box-art.jpg',
            'prixHT' => 32,
            'promotion' => 10,
            'disponnibilite' => 0,
        ],
        "00sky" => [
            'titre' => '00 Sky',
            'photo' => 'https://www.super-hobby.fr/zdjecia/3/5/4/32023_rd.jpg',
            'prixHT' => 90,
            'promotion' => 0,
            'disponnibilite' => 0,
        ],
    ];
}

function get_produit($IDproduit) {
    $produits = get_produits();

    if (! isset($produits[$IDproduit])) {
        throw new Error('Mauvais identifiant produit');
    }

    return $produits[$IDproduit];
}

