<?php
  include 'inc/classes.php';
  include 'inc/conn.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/0d301ed410.js"></script>
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title></title>
  </head>

  <body>
    <?php include 'inc/header.php' ?>
    <div id='content'>
      <?php include 'inc/sidebar.php' ?>
      <div id='main'>
        <h1><?php print $player->region?></h1></br>
        <hr id='top-hr'>
        <table id='main-header'>
          <tr class='page-header'>
            <th>
              <i class="far fa-lightbulb"></i> Region - XR0-12K
            </th>
          </tr>
          <tr class='page-header-content'>
            <td>
              Welcome to your region. From here you can find information about the region
              you are currently in such as the stations in the region, asteriod belts around
              and the Planets in the system.
            </td>

          </tr>
        </table>
        <hr>
        <span style="clear:both;">


        <table class='station-info'>
          <tr class='page-header'>
            <th>
              Stations
            </th>
          </tr>

          <tr >
            <td class='td-left'> Station #1 - Industry </td>
          </tr>
          <tr >
            <td class='td-left'> Station #2 - Uni </td>
          </tr>
          <tr >
            <td class='td-left'> Station #3 - Workers Home </td>
          </tr>
          <tr >
            <td class='td-left'> Station #4 - Something </td>
          </tr>
        </table>

        <table class='station-info'>
          <tr class='page-header'>
            <th>
              Planets
            </th>
          </tr>

          <tr >
            <td class='td-left'> Planet #1 </td>
          </tr>
          <tr >
            <td class='td-left'> Planet #2 </td>
          </tr>
          <tr >
        </table>

        <table class='station-info'>
          <tr class='page-header'>
            <th>
              Asteroid Belts
            </th>
          </tr>

          <?php
            $qry = "SELECT * FROM belts where region_id = 1";
            $result = mysqli_query($conn, $qry);
            print mysqli_num_rows($result);
            foreach ($result as $row){
            ?>
            <tr >
              <td class='td-left'> <?php echo $row['name'];?> </td>
            </tr>
            <?php }
            ?>

        </table>




      </div>
    </div>
  </body>
</html>
