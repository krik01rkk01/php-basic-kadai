<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_005</title>
</head>
<body>
    <p>
        <?php
            $score1 = 80;
            $score2 = 60;
            $score3 = 55;
            $score4 = 40;
            $score5 = 100;
            $score6 = 25;
            $score7 = 80;
            $score8 = 95;
            $score9 = 30;
            $score10 = 60;

            // 合計点
            $totalScore = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

            // 平均点
            $averageScore = $totalScore / 10;

            // 出力する
            echo $averageScore;
        ?>
    </p>
</body>
</html>