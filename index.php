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
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#" type="button" class="btn btn-default btn-lg ">Home</a>
      <a href="form.php" type="button" class="btn btn-default btn-lg ">Add</a>
        <form action="add.php" method="post" class="navbar-form navbar-right" role="search">
              <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
              </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        
    </div>
  </div>
</nav>

<?php 
      require_once "config.php";
        $query = "SELECT * FROM contact_table";
        $data = selectPerson($query);
?>


<table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Address</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone number</th>
      <th scope="col">Редактировать/удалить запись</th>
    </tr>
    <?php
    foreach ($data as $user):
      ?>
    <tr>
      <td><?php echo $user['address']; ?></td>
      <td><?php echo $user['name']; ?></td>
      <td><?php echo $user['last_name']; ?></td>
      <td><?php echo $user['phone_number']; ?></td>
      <td><a href="edit.php?id=<?= $user['id']; ?>" type="button" class="btn btn-success" scope="col" >Изменить</a></td>
    </tr>
<?php
      endforeach;
?>
  </thead>
  
  </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>