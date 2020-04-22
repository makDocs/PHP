
<?php

$data = array(1, 1.9, NULL, 'foo', function () {
    echo "this is in functions";
}, [1, 2, 3], true);

// $data = array(1, 1.9, NULL, new stdClass, 'foo', function () {
// }, [1, 2, 3], true);
print_r($data);




foreach ($data as $key => $value) {
    echo $key . '  ' . gettype($value) . "\n";
    if (gettype($value) == 'object') {
        $value();
        echo "\n";
    } else {
        echo $value . "\n";
    }
}
// foreach ($data as $value) {
//     var_dump($value);
// }

?>
