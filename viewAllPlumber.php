<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="./admin_panel/assets/css/style.css"/>
  </head>
  <body>
    <div >
      <h2>Plumber</h2>
      <table class="table ">
        <thead>
          <tr>
            <th class="text-center">S.N.</th>
            <th class="text-center">Image</th>
            <th class="text-center">Name</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Profile</th>
            <th class="text-center">Wages</th>
          </tr>
        </thead>
        <?php
        include_once "./admin_panel/config/dbconnect.php";
        $sql="SELECT * from plumber, category WHERE plumber.category_id=category.category_id";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
          while ($row=$result-> fetch_assoc()) {
            ?>
            <tr>
              <td><?=$count?></td>
              <td><img height='100px' src='./admin_panel/<?=$row[ "plumber_image"]?>'></td>
              <td><?=$row[ "plumber_name"]?></td>
              <td><?=$row[ "plumber_desc"]?></td>      
              <td><?=$row["category_name"]?></td> 
              <td><?=$row["price"]?></td>     
            </tr>
            <?php
            $count=$count+1;
          }
        }
        ?>
      </table>
      </div>
  </body>
</html>