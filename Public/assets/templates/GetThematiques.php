<?php
namespace assets\templates;
//Liste des thématiques de pari

$thematiques =
[
    ['title' => 'Télévision',        "number" => 1  ],
    ['title' => 'Cinéma',            "number" => 2  ],
    ['title' => 'Anime',             "number" => 3  ],
    ['title' => 'Jeux vidéo',        "number" => 4  ],
    ['title' => 'Cuisine',           "number" => 5  ],
    ['title' => 'Entre amis',        "number" => 6  ],
    ['title' => 'Anniversaire',      "number" => 7  ],
    ['title' => 'Noël',              "number" => 8  ],
    ['title' => 'Mariage',           "number" => 9  ],
    ['title' => 'Fête',              "number" => 10 ],
    ['title' => 'Autre',             "number" => 11 ]
];

echo json_encode($thematiques);