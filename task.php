<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

  array_push($names,"斎藤");
  print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

  $array=array_merge($array1, $array2);
  print_r($array);

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載

  $output = array_count_values($numbers);
  print_r($output[3]);

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
  $sport=array_diff($sports,array(null));
  print_r($sport);

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載

  
  var_export(empty($array1));
  echo PHP_EOL;
  var_export(empty($array2));  

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
  
  foreach($numbers1 as $val) {
    $numbers2[] = $val * 10;
  }

  print_r($numbers2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載

  $array = array_map('intval', $array);

  # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載

  $programming_languages = array_map('ucfirst', $programming_languages);
  $upper_case_programming_languages = array_map('strtoupper', $programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  
  foreach($names as $key => $name) {
    $number = $key + 1;
    $member[] = "会員No.".$number." ".$name;
  }

  print_r($member);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼","高級なうに"];

  # 以下に回答を記載
  foreach($foods as $food){
    if(strpos($food, "うに") !== false){
      echo '好物です';
    } else {
      echo 'まぁまぁ好きです';
    }
    echo PHP_EOL;
  }
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  $sports2 = [];
  
  foreach($sports as $k => $v){
    if(is_array($v)){
      $sports2 = array_merge($sports2, $v);
    } else {
      array_push($sports2, $v);
    }
  }
  $sports2 = array_unique($sports2);
  $sports2 = array_values($sports2);

  print("ユーザーの趣味一覧".PHP_EOL);
  foreach($sports2 as $key => $sport) {
    $number = $key + 1;
    echo "No".$number." ".$sport.PHP_EOL;
  }

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
  print_r($data['user']['name']);

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載

  $user_data['age'] = $update_data['age'];
  $user_data['address'] = $update_data['address'];

  print_r($user_data);

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

  $data2 = [];
  foreach($data as $v){
      array_push($data2,$v);
  }
  print_r($data2);

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
  function array_key($array){
    if ( array_key_exists('age', $array) ) {
        echo "OK";
    } else {
      echo "NG";
    }
  }

  print_r(array_key($data1));
  echo PHP_EOL;
  print_r(array_key($data2));

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

  foreach($users as $v) {
    print_r("私の名前は".$v['name']."です。年齢は".$v['age']."歳です。");
    echo PHP_EOL;
  }

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

// $user1->info();
// print("-------------".PHP_EOL);
// $user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

// $man1 = new Man("あじー",32);
// $man2 = new Man("ゆたぼん",10);

// $man1->introduce();
// $man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

// $book = new Item("ゼロ秒思考");
// print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{

  # コードを追加

}

// $zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

// $human1 = new Human("たま",3);
// $human2 = new Human("ゆたぼん",10);
// $human3 = new Human("あじー",32);
// $human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

// foreach($humans as $human){
//   $zoo->info_entry_fee($human);
// }

echo PHP_EOL;

