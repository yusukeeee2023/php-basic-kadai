<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        echo '昇順にソートします。<br>';
        $nums = array(15, 4, 18, 23, 10 );
        sort($nums);
        foreach ($nums as $key) {
          echo "$key <br>" ;
      }

        echo '降順にソートします。<br>';
        $nums = array(15, 4, 18, 23, 10 );
        arsort($nums);
        foreach ($nums as $key) {
          echo "$key <br>" ;
      }


        


        ?>
    </p>
</body>

</html>