<?php 
//echo: in ra màn hình//
//echo "Hello";
//access: localhost:8080/simpleweb/demo.php
//1. user html tag
//echo "<h2> Heading 2 </h2>";
//2. Declare varilable(gán giá trị)
//$a = 5;
//$b = 'Hello';
//$c = "Khanh";
//$A = 8.9;
//echo gettype($b);
//echo "<br>";
//echo gettype($c);
//3.Chuyển chuỗi thành số
//$var = '5.4';
//$intvar = intval($var);
//$floatvar = floatval($var);
//echo $intvar;
//echo "<br>";
//echo $floatvar;
//4. Brackets
// $name = "Khiem";
// $mark = 8.9;
// echo 'Result: $name -
//  $mark <br>';
//  echo 'Result: '.$name. '-'. $mark;
//  echo "<p style ='color:blue'>$mark $name</p>";
//  $foods = array("cherry",
//  "apple");
//  $user = [
//     'fname'=>'John',
//     'lname'=> 'Doe'
//  ];
//  echo "foods[0]: $foods[0]";
//  //user: John Doe
//  echo "User: $user[fname] ".$user 
//  ['lname']."<br>";
//  //you are the 3th person
//  $n =3;
//  echo "You are the {$n}th person";
//  echo "<br>";
//  //---
//  class Student{
//     public $name;
//     public $number;
//     public function __construct
//     ($number, $name)
//     {
//         $this->name=$name;
//         $this->number=$number;
//     }
//  }
//  $std = new Student("123","John");
//  //student is John [123]
//  echo "Student is $std->name
//  [$std->number]";
//6. null
//  $var = 4;
//  $var1 = NULL;
//  var_dump(is_null($var1));
//  echo "<br>";
//  unset($var1);
//  var_dump(is_null($var1));
//7 Const
// const pi =3.14;
// echo pi;
// define("slogan", " into the new world");
// echo slogan;
// echo "<br>";
// $price = 300;
// define("max_price",$price);
// echo max_price;
//8 Null coalescing(hop nhat null)
// $name = "John";
// echo $fname = $name1 ?? "No name";
// var_dump($fname);
?>
<?php
//9 Form
if(isset($_GET['submit'])){
   // echo "ok";
   if(isset($_GET['fname']) && isset($_GET['email'])){
      $fname = htmlspecialchars($_GET['fname']);
      $email = htmlspecialchars($_GET['email']);
      echo "<p style='color:green'>$fname - $email</p>";
      $result = "$fname - $email";
   }
}
?>
<p style="color:Red"><?= $result ?? ""?></p>
<form action="#" method="GET">
  Full name: <input type= "text" name ="fname"><br>
  Email: <input type= "text" name="email"><br>
  <input type="submit" value="Send" name="submit">
</form>
