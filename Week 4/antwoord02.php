<?php

print_r( $_REQUEST);
echo '<br>';
print_r( $_GET );
print( $_POST['energie']);
print_r( $_POST['energie']);

$apparaat = [
    'pizza' => 'pizza oven',
    'water' => 'waterkoker',
    'magn' => 'magnetron',
    'air' => 'airfryer',
];

//foreach ($_POST['energie'] as $key)
//    print ($key) . ': ' . $apparaat[$key] . '<br>';

