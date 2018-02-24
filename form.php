<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <nav class="navbar navbar-inverse ">
                <a href="index.php" type="button" class="btn btn-default btn-lg ">Home</a>
        </nav>
     
        <div class="container">
            <div class="page-header">
  <h1>New contact</h1>
<?php

require_once "config.php";


if(isset($_POST['button1'])){

    $pdo=getConnection();
    $phone=$_POST['phone_number'];
    $valid=("SELECT COUNT(*) FROM contact_table WHERE phone_number='".$phone."' LIMIT 1");
    $res = $pdo->prepare($valid); 
    $res->execute(); 
    $number_of_rows = $res->fetchColumn(); 
if ($number_of_rows == 0) {
    $stmt=$pdo->prepare("INSERT INTO contact_table (name, last_name, phone_number, address, birthday, e_mail, image) VALUES (:name, :last_name, :phone_number, :address, :birthday, :e_mail, :image)");

    $stmt->bindParam(':image', file_get_contents($_FILES['image']['tmp_name']));
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':birthday', $birthday);
    $stmt->bindParam(':e_mail', $e_mail);
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $e_mail = $_POST['e_mail'];
    print_r($query);
    $stmt->execute();
    } else {
    echo "Пользователь с таким номером телефона уже существует";
}
}
?>
        </div>

            <form method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="First Name">First Name</label>
                    <input name="name" type="text" class="form-control"  placeholder="">
                </div>
                <div class="form-group">
                    <label for="Last Name">Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="Phone number">Phone number</label>
                    <input name="phone_number" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="e_mail" type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input name="birthday" type="text" class="form-control" placeholder="">
                </div>

                <p><input type="file" name="image"></p>
                
                
                <input type="submit" name="button1" class="btn btn-success"></button>
            </form>
        </div>






   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>