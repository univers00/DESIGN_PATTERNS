<?php
namespace App;

require_once (__DIR__."/../vendor/autoload.php");


$db = new CatDataBase();

echo "Client: Let's see what we have in \"cats.csv\".\n";


$handle = fopen(__DIR__ . "\cat.csv", "r");
$row = 0;
$columns = [];
while (($data = fgetcsv($handle,null,";")) !== false) {
    if ($row == 0) {
        for ($c = 0; $c < count($data); $c++) {
            $columnIndex = $c;
            $columnKey = trim(strtolower($data[$c]));
            $columns[$columnKey] = $columnIndex;
            echo $columnKey."\n";
        }
        $row++;
        continue;
    }

    $db->addCat(
        $data[$columns['name']],
        $data[$columns['age']],
        $data[$columns['owner']],
        $data[$columns['breed']],
        $data[$columns['image']],
        $data[$columns['color']],
        $data[$columns['texture']],
        $data[$columns['fur']],
        $data[$columns['size']],
    );
   // $row++;
}
fclose($handle);

// ...

echo "\nClient: Let's look for a cat named \"Siri\".\n";
$cat = $db->findCat(['name' => "meaw1"]);
if ($cat) {
    $cat->render();
}

echo "\nClient: Let's look for a cat named \"Bob\".\n";
$cat = $db->findCat(['name' => "Bob"]);
if ($cat) {
    $cat->render();
}