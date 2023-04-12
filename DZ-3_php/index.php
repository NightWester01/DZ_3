<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Задача 1
        function isNumberInRange($number){
            if ($number > 0 && $number < 10) {
              return true;
            } else {
              return false;
            }
        }

        //Задача 2
        function isEven($number){
            if($number % 2 == 0){
              return true;
            } else {
              return false;
            }
        }
        //Задача 3
        function isEven($num){
            return $num % 2 == 0;
        }
        $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $newArray = [];
        foreach($numbers as $num) {
            if(isEven($num)) {
                $newArray[] = $num;
            }
        }
        print_r($newArray);
        //Задача 4
        function cut($string, $length = 10){
            return substr($string, 0, $length);
        }
        //Задача 5
        $arr = array('1' => 1,'2' => 2);
        function arrayNum($arr){
            echo array_shift($arr);
            if(!empty($arr)) arrayNum($arr);
            else return;
        }
        arrayNum($arr)."<br>";
        //Задача 6
        $file = "test.txt";
        $data = file_get_contents($file);
        echo $data;
        //Задача 7
        $file = 'count.txt';
        $count = file_get_contents($file) + 1;
        file_put_contents($file, $count);
        echo 'Количество обновлений страницы:'. $count;
        //Задача 8
        //Задача 9
        //Задача 10 --> Index2.php
    ?>
</body>
</html>