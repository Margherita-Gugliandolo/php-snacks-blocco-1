<?php
$play_1 = array(1 => 'Sassari', 'Nuoro', 50, 65);
echo $play_1[1];
echo '  ';
echo $play_1[2];
echo ' | ';
echo $play_1[3];
echo ' - ';
echo $play_1[4];

echo '<br>';

$play_2 = array(1 => 'Frosinone', 'Milano', 40, 70);
echo $play_2[1];
echo '  ';
echo $play_2[2];
echo ' | ';
echo $play_2[3];
echo ' - ';
echo $play_2[4];

echo '<br>';

$play_3 = array(1 => 'Imperia', 'Spezia', 15, 45);
echo $play_3[1];
echo '  ';
echo $play_3[2];
echo ' | ';
echo $play_3[3];
echo ' - ';
echo $play_3[4];

?>

<?php
echo '<br>';
echo '<br>.................';
echo '<br>';
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
echo $name;
echo '<br>';
echo $mail;
echo $age;


$countName = strlen($name);
echo $countName;

if($countName > 3){
  echo '<br>';
  echo 'ok';
} else {
  echo '<br>';
  echo "it's so short!";
}



$find_at = '@';
$find_dot = '.';
$result_at = strpos($mail, $find_at);
$result_dot = strpos($mail, $find_dot);
if ($result_at === false || $result_dot === false) {

    echo '<br>';
    echo "<h3>Ritenta e sarai più fortunato :)</h3>";
} else {
    echo '<br>';
    echo "accesso riuscito";
};

echo '<br>';

if (is_numeric($age)) {
    echo  "goal";
} else {
    echo "Scrivi la tua età in numeri, graze :)";
}
 ?>
