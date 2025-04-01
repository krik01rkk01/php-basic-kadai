<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        // クラスの定義
        class Food {
        // プロパティを定義
            private $name;
            private $price;

        // メソッドを定義
            public function show_price(){
                echo $this->price;
            }

        // コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }
        // クラスの定義
        class Animal {
            // プロパティを定義
                private $name;
                private $height;
                private $weight;


            // メソッドを定義
                public function show_height(){
                    echo $this->height;
                }

            // コンストラクタを定義する
                public function __construct(string $name, int $height,string $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
        }

     // インスタンス化
     $food = new Food('potato',250);
     $animal = new Animal('dog',60,5000);

     // 出力する
     print_r($food);
     echo '<br>';
     print_r($animal);
     echo '<br>';

    //  メソッドへアクセス
    echo $food->show_price();
    echo '<br>';
    echo $animal->show_height();
    echo '<br>';
    ?>
    </p>
</body>
</html>