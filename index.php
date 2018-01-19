
<?php
$arr = array('North Africa' => array('Canis', 'Vulpes cana', 'Acinonyx jubatus', 'Felis chaus' ),
    'Australia' => array('Ornithorhynchus anatinus', 'Tachyglossus aculeatus', 'Pseudantechinus macdonnellensis', 'Dactylopsila megalura'),
    'Europa' => array('Alopex lagopus', 'Canis lupus', 'Felis silvestris', 'Lynx'),
    'South America' => array('Nasuella olivacea', 'Mustela africana','Saguinus midas', 'Mico leucippe'),
    'North America' => array ('Sapajus xanthosternos', 'Callicebus cupreus','Microsciurus mimulus', 'Pecari'));
$first_word = array();
$second_word = array();
$animal_two_words = array();
$two_in_one = array();
foreach ($arr as $continent => $animal_arr) {
    foreach ($animal_arr as $animal) {
        $pair_words = explode(' ', $animal);
        if (count($pair_words) == 2) {
            $animal_two_words[] = $animal;
            $first_word[] = $pair_words[0];
            $second_word[] = $pair_words[1];
        }
    }
}
shuffle($second_word);
for ($i=0; $i<count($first_word); $i++) {
    $two_in_one[] = $first_word[$i] . " " . $second_word[$i] . "<br>";
}
echo "<h2>Название фантазийных животных :</h2>";
echo '<pre>';
echo implode(PHP_EOL, $two_in_one);
