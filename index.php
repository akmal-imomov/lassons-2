<?php

for ($i=0; $i<100; $i+=2){
    $arr[] = $i *2;

}

echo "<pre>";
print_r($arr);
echo "</pre>";


foreach ($arr as $key =>$value){

    if ($key > 0 && $key % 2 == 0 )
    echo '$key[ ' . $key . '] = $value[' . $value . ']<br/>';

    if ($key == 10)
    {
        break;
        echo 'beha';
    }
}

