<?php
    $ninjaArr = [
        "Naruto Uzumaki,Konohagakure,Male,Yellow Haired Nuisance,Active,Rasengan",
        "Sakura Haruno,Konohagakure,Female,Pink Bimbo Healer,Active,Cherry Blossom Impact",
        "Sasuke Uchiha,Konohagakure,Male,The Avenger,Active,Chidori: One Thousand Birds,Deserted",
        "Kakashi Hatake,Konohagakure,Male,The Copy Ninja,Active,Lightning Blade",
        "Shikamaru Nara,Konohagakure,Male,Lazy Shadow Bender,Active,Shadow Posession Jutsu",
        "Ino Yamanaka,Konohagakure,Female,Blonde Flower Girl,Active,Mind Transfer Jutsu",
        "Choji Akimichi,Konohagakure,Male,Eats way too much,Active,Spiky Human Boulder",
        "Kiba Inuzuka,Konohagakure,Male,Hotheaded Dog Lover,Active,Wolf Fang Over Fang",
        "Shino Aburame,Konohagakure,Male,Creepy Bug Genius,Active,Parasitic Insects Jutsu",
        "Hinata Hyuga,Konohagakure,Female,Shy Byakugan Princess,Active,Protective 8 Trigrams 64 Palms ",
        "Neji Hyuga,Konohagakure,Male,The Genius Bound by Fate,Active,8 Trigrams 64 Palms",
        "Rock Lee,Konohagakure,Male,The Guy with GUTS,Active,Hidden Lotus",
        "Tenten,Konohagakure,Female,Weapon crazy woman,Active,Rising Twin Dragons",
        "Gaara,Sunagakure,Male,Jinchuriki of Shukaku,Active,Giant Sand Burial",
        "Kankuro,Sunagakure,Male,Puppet Master,Active,Secret Black Moon Iron Maiden",
        "Temari,Sunagakure,Female,The spunky Wind master,Active,Ninja Art: Wind Scythe Jutsu",
        "Haku,Kirigakure,Male,Ice Angel Prodigy,Dead,Secret Jutsu: Crystal Ice Mirrors",
        "Zabuza,Kirigakure,Male,Demonic Swordsman,Dead,Hidden Mist Jutsu: Silent Killing",
        "Tsuande,Konohagakure,Female,The strong foul-tempered age changer,Active,Mitotic Regeneration",
        "Jiraiya,Konohagakure,Male,The Pervy Sage,Dead,Toad Flame Bombs",
        "Orochimaru,Otogakure,Male,Mad Snake Scientist,Active,Impure World Reincarnation",
        "Kabuto Yakushi,Otogakure,Male,Intellectual Medical Ninja,Active,Chakra Scalpel",
        "Kimmimaro,Otogakure,Male,Has too many Bones,Dead,Bracken Dance",
        "Sakon & Ukon,Otogakure,Male,Freak with a Twin Brother on his Back,Dead,Summoning:Rashomon",
        "Kidomaru,Otogakure,Male,Spider Archer,Dead,Spider War Bow: Terrible Split",
        "Jirobo,Otogakure,Male,Heavyweight that steals chakra,Dead,Earth Style: Sphere of Graves",
        "Tayuya,Otogakure,Female,Art of Flute Genjutsu,Dead,Demon Flute: Chains of Fantasia",
        "Itachi Uchiha,Konohagakure,Male,The master of the Sharingan,Dead,Mangekyou Sharingan: Tsukuyomi,Deserted",
        "Kisame Hoshigaki,Kirigakure,Male,The shark out of water,Active,Water Style: Water Shark Bomb Jutsu,Deserted",
        "Shizune,Konohagakure,Female,The Hokage's Assistant,Active,Ninja Art: Poison Fog",
        "Danzo Shimura,Konohagakure,Male,The Evil Bad Guy in the Basement,Dead,Shisui's Eye"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 7</title>
</head>
<body>
    <form method='post'>
        Select a ninja:
        <?php
            $ninja_name = '';
            if (isset($_POST['ninja'])) {
                $ninja_name = $_POST['ninja'];
            }
            echo "<select name='ninja'>";

            ## Creates the Dropdown Select Menu ##
            foreach ($ninjaArr as $ninja) {
                $selected = '';
                $ninja_list = explode(",",$ninja);
                if ($ninja_list[0] == $ninja_name) {
                    $selected = 'selected';
                }
                echo "
                <option value='{$ninja_list[0]}' $selected>{$ninja_list[0]}</option>";
            }

            echo "
            <input type='submit'> <br><br>";

            if (isset($_POST['ninja'])) {
                echo "
                <table border='1'>
                    <tr>
                        <th>Name</th>
                        <th>Village</th>
                        <th>Gender</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Signature Jutsu</th>
                    </tr>";
                foreach ($ninjaArr as $ninja) {
                    $ninja_list = explode(",",$ninja);
                    if ($ninja_list[0] == $ninja_name) {
                        echo "<tr>
                            <td>{$ninja_list[0]}</td>
                            <td>{$ninja_list[1]}</td>
                            <td>{$ninja_list[2]}</td>
                            <td>{$ninja_list[3]}</td>
                            <td>{$ninja_list[4]}</td>
                            <td>{$ninja_list[5]}</td>
                        </tr>";
                        if (isset($ninja_list[6])) {
                            echo "<tr>
                                <td style='color:red;' colspan='6'>This person has deserted their village</td>
                            </tr>";
                        }
                        
                    }
                }
                echo "</table>";
            }
        ?>
    </form>
    
</body>
</html>