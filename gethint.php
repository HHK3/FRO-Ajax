<?php
$gameCharacters =  array ("Akuma (Street Fighter Series)", "Alex (Street Fighter)", "Balrog (Street Fighter)",
     "Battletoads", "Big Boss (Metal Gear Series)", "Blastoise (Pokémon Series)", "Bowser", "Bowser Jr.", "Captain Falcon (F-ZERO)",
     "Clank", "Conker the Squirrel", "Dante (Devil May Cry)", "Daxter", "Dhalsim (Street Fighter)", "Dr. Eggman", "Dr. Neo Cortex",
     "Doomfist (Overwatch)", "Doomguy", "Dr. Wily (Mega Man Series)", "E. Honda (Street Fighter)", "Earthworm Jim",
     "Fawful (Mario & Luigi Series)", "Glass Joe (Punch-Out!!! Series)", "Goro (Mortal Kombat)", "Gordon 
     Freeman (Half-Life Series)", "Guile (Street Fighter)", "Handsome Jack (Borderlands Series)", "Hanzo (Overwatch)",
    "Illusive Man (Mass Effect Series)", "Jak", "Jax (Mortal Kombat)", "Jin Kazama (Tekken Series)", "Kuma & Panda (Tekken Series)",
     "King DeDeDe", "Kirby", "Knuckles the Echidna", "Professor Layton", "Link", "Little Mac", "Luigi", "Mario", "Marth (Fire Emblem Series)",
     "Mega Man", "Meta Knight", "Mr. Nutz", "Ness (Earthbound Series)", "Pac-Man", "Pit", "Captain Price", "Proto Man",
     "Raiden", "Rachet", "Rayman", "Ryu", "Sagat", "Scorpion", "Shadow the Hedgehog", "Shulk", "Soda Popinski", "Solaire of Astora",
     "Solid Snake", "Sonic the Hedgehog", "Sora", "Sypro the Dragon", "Sub-Zero", "Tails", "Tingle", "Toad", "Travis Touchdown",
     "Vega", "Viewtiful Joe", "Von Kaiser", "Waluigi", "Wario", "Winston (Overwatch)", "Yoshi", "Zangief", "Zero");



$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($gameCharacters as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === " <br> ") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

echo $hint === "" ? "geen suggestie(s) beschikbaar" : $hint;