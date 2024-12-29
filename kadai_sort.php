<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order)
        { 
            if ($order === TRUE) {
                sort($array);
                echo '昇順にソートします<br>';
            } elseif ($order === FALSE) {
                rsort($array);
                echo '降順にソートします<br>';
            }
            foreach ($array as $value) {
                echo "{$value}<br>" ;
            }
        }
       // ソートする配列を宣言
       $nums = [15, 4, 18, 23, 10];
       
       
       sort_2way($nums,TRUE);
       echo "<br>";
     
       sort_2way($nums,FALSE);
       echo "<br>";       
        ?>
    </p>
</body>

</html>