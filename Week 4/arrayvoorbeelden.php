<html>
<head>
    <title>Arrays vervolg</title>
</head>
<body>
<?php

$week = [
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'fri' => 'vrijdag',
    'zat' => 'zaterdag',
    'zon' => 'zondag'
];

$student = [
    '30921' => 'Sem Hiel',
];

$units = [
    'fro' => 'Frontend',
    'bap' => 'Backend',
    'ux' => 'User Experience',
    'bo' => 'Beroeps opdracht'
];

$docent = [
    'brah' => 'Hidde Braun',
    'gomb' => 'Bart Gommers',
    'hits' => 'Simon Hitipeuw'
];

$apparaat = [
  'po' => 'pizza oven',
  'wk' => 'waterkoker',
  'mg' => 'magnetron',
  'af' => 'airfryer'
];

foreach ($week as $key => $value) {
    print ($key) . ' ' . $value . '<br>';
}

foreach ($student as $key => $value) {
    print ($key) . ' ' . $value . '<br>';
}

foreach ($units as $key => $value) {
    print ($key) . ' ' . $value . '<br>';
}

foreach ($docent as $key => $value) {
    print ($key) . ' ' . $value . '<br>';
}

foreach ($apparaat as $key => $value) {
    print ($key) . ' ' . $value . '<br>';
}

//    print_r($week);
//    var_dump($week);

    echo $week['zon'];
    echo $docent['gomb'];

?>

</body>
</html>
