<?php
    $match = [
        'pippo' => [
            'team1' => 'Olimpia Milano',
            'team2' => 'Cantù',
            'score1' => 55,
            'score2' => 60
        ],
        'pluto' => [
            'team1' => 'Firenze',
            'team2' => 'Roma',
            'score1' => 10,
            'score2' => 70
        ],
        'topolino' => [
            'team1' => 'Torino',
            'team2' => 'Verona',
            'score1' => 66,
            'score2' => 12
        ]
    ];
    // foreach ($match as $m) {
    //
    //     echo $m['team1'] . ' - ' . $m['team2']
    //         . ' | ' . $m['score1'] . '-' . $m['score2']
    //         . '<br>';
    // }
    // for ($i=0;$i<count($match);$i++) {
    //
    //     $m = $match[$i];
    //
    //     echo $m['team1'] . ' - ' . $m['team2']
    //         . ' | ' . $m['score1'] . '-' . $m['score2']
    //         . '<br>';
    // }
    $keys = array_keys($match);
    // var_dump($keys); die();
    for ($i=0;$i<count($keys);$i++) {
        $key = $keys[$i];
        $m = $match[$key];
        echo $m['team1'] . ' - ' . $m['team2']
            . ' | ' . $m['score1'] . '-' . $m['score2']
            . '<br>';
    };
?>

<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age  = $_GET['age'];
    echo "name: " . $name . "<br>";
    echo "mail: " . $mail . "<br>";
    echo "age: " . $age . "<br>";
    echo "<br>";
    echo "<br>";
    $validName = strlen($name) > 3;
    $validMail = strpos($mail, '.') !== false &&
                 strpos($mail, '@') !== false;
    $validAge  = is_numeric($age);
    if ($validName && $validMail && $validAge) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
  ?>


 <?php
 echo '<br>';
 $rnds = [];
    while(count($rnds) < 15) {
        $rnd = rand(1, 15);
        if (!in_array($rnd, $rnds)) {
            $rnds[] = $rnd;
        }
    }
    var_dump($rnds);
?>
