<?php
$categories = [

   0 =>      [
            "code" => "01",
            "nom" => "categorie1",
            "produits" => [
                  0 => [
                    "nom" => "prodt1",
                    "reference" => "reference1",
                    "prix" => 8000,
                    "quantite" => 3
                  ],
                  1 => [
                    "nom" => "prodt2",
                    "reference" => "reference2",
                    "prix" => 200,
                    "quantite" => 3 
                  ]
            ]
         ],
   1 =>      [
            "code" => "02",
            "nom" => "categorie2",
            "produits" => []
         ]
];

    foreach($categories as $key ) {
        if(empty($key["produits"])){
            echo $key["nom"]."\n";
        }
    } 

?>