<?php

$superheroes = [
    [
        "id" => 1,
        "name" => "Steve Rogers",
        "alias" => "Captain America",
        "biography" => "Recipient of the Super-Soldier serum, World War II hero Steve Rogers fights for American ideals as one of the world's mightiest heroes and the leader of the Avengers."
    ],
    [
        "id" => 2,
        "name" => "Tony Stark",
        "alias" => "Ironman",
        "biography" => "Genius. Billionaire. Playboy. Philanthropist. Tony Stark's confidence is only matched by his high-flying abilities as the hero called Iron Man."
    ],
    [
        "id" => 3,
        "name" => "Peter Parker",
        "alias" => "Spiderman",
        "biography" => "Bitten by a radioactive spider, high school student Peter Parker gained the speed, strength, and powers of a spider, becoming the amazing Spider-Man."
    ],
    [
        "id" => 4,
        "name" => "Carol Danvers",
        "alias" => "Captain Marvel",
        "biography" => "A former U.S. Air Force pilot, Carol Danvers transformed into Captain Marvel after exposure to alien technology, becoming one of the universe's most powerful heroes."
    ],
    [
        "id" => 5,
        "name" => "Natasha Romanoff",
        "alias" => "Black Widow",
        "biography" => "A former KGB assassin, Natasha Romanoff, also known as Black Widow, is a skilled spy and a key member of the Avengers."
    ],
    [
        "id" => 6,
        "name" => "Bruce Banner",
        "alias" => "Hulk",
        "biography" => "After a lab accident involving gamma radiation, scientist Bruce Banner transforms into the Hulk, a giant green-skinned superhero with immense strength."
    ],
    [
        "id" => 7,
        "name" => "Clint Barton",
        "alias" => "Hawkeye",
        "biography" => "Master archer Clint Barton, known as Hawkeye, uses his exceptional skills and accuracy to fight alongside the Avengers."
    ],
    [
        "id" => 8,
        "name" => "T'Challa",
        "alias" => "Black Panther",
        "biography" => "King of the secretive and technologically advanced African nation of Wakanda, T'Challa protects his people as the Black Panther."
    ],
    [
        "id" => 9,
        "name" => "Thor Odinson",
        "alias" => "Thor",
        "biography" => "The Norse God of Thunder, Thor wields his enchanted hammer, Mjolnir, in his battle to protect both Asgard and Earth from powerful threats."
    ],
    [
        "id" => 10,
        "name" => "Wanda Maximoff",
        "alias" => "Scarlet Witch",
        "biography" => "Wanda Maximoff, known as Scarlet Witch, possesses incredible reality-altering powers, making her one of the most powerful Avengers."
    ]
];

$query = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);

if ($query) {
    $found = false;
    foreach ($superheroes as $superhero) {
        if (strcasecmp($superhero["name"], $query) === 0 || strcasecmp($superhero["alias"], $query) === 0) {
            echo "<h3>" . htmlspecialchars(strtoupper($superhero["alias"])) . "</h3>";
            echo "<h4>A.K.A " . htmlspecialchars(strtoupper($superhero["name"])) . "</h4>";
            echo "<p>" . htmlspecialchars($superhero["biography"]) . "</p>";
            $found = true;
            break;
        }
    }
    if (!$found) {
        echo "<p class=\"not-found\">SUPERHERO NOT FOUND</p>";
    }
} else {
    echo "<ul>";
    foreach ($superheroes as $superhero) {
        echo "<li>" . htmlspecialchars($superhero["alias"]) . "</li>";
    }
    echo "</ul>";
}
?>
