<?php

  $connection = mysqli_connect('localhost','root','','book_db');

  if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $item = $_POST['item'];
    $item_no = $_POST['item_no'];

    $request = " insert into book_form(name, email,	phone, address, item, item_no) values
    ('$name','$email','$phone','$address','$item','$item_no')";

    mysqli_query($connection, $request);
    header('location:book.php');
  }else{
    echo 'something went wrong';
  }

?>