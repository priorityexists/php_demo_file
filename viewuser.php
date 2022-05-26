<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View data</title>
  </head>
  <body>

    <div class="container">
        <h2>View Data</h2>
        <p>For the retrival data  from mySQL select statement. We can retrive the datafrom specific data from specific column or all column of a table.</p>
        <table class="table table-condensed">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
    </tr>
  </thead>

  <?php
  $sql="select * from labsheet";
  $result=mysqli_query($connection,$sql);
  if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)){
  
  ?>

  <tbody>
    <tr>

     <td>
         <?=$row['ID'];?>
     </td>

     <td>
         <?=$row['fname'];?>
     </td>

     <td>
         <?=$row['lname'];?>
     </td>

     <td>
         <?=$row['email'];?>
     </td>

     <td>
         <?=$row['uname'];?>
     </td>

    </tr>
  </tbody>
  <?php
      }
  }
  ?>

</table>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>