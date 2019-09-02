<?php
  include 'inc/classes.php';
  include 'inc/conn.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/0d301ed410.js"></script>
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title></title>
  </head>

  <body>
    <?php include 'inc/header.php' ?>
    <div id='content'>
      <?php include 'inc/sidebar.php' ?>
      <div id='main'>
        <h1>Missions</h1></br>
        <hr id='top-hr'>
        <table id='main-header'>
          <tr class='page-header'>
            <th>
              <i class="far fa-lightbulb"></i> Missions
            </th>
          </tr>
          <tr class='page-header-content'>
            <td>
              This area is for everything mission related. From here you can see information about your current mission. You can also see missions that you have the skills for and their location.
            </td>

          </tr>
        </table>
        <hr>
        <span style="clear:both;">

        <table class='mission-info mission-list'>
          <tr class='page-header'>
            <th>
              Available Missions
            </th>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'>Industry </td>
          </tr>
          <tr>
            <td class='td-left'> Industry #003 </td>
          </tr>
          <tr>
            <td class='td-left'> Industry #002 </td>
          </tr>


          <tr class = 'mission-headers'>
            <td class='td-left'> Exploration </td>
          </tr>
          <tr>
            <td class='td-left'> Exploration #024 </td>
          </tr>


          <tr class = 'mission-headers'>
            <td class='td-left'> Seekers </td>
          </tr>
          <tr>
            <td class='td-left'> None Available </td>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'> Bounty </td>
          </tr>
          <tr>
            <td class='td-left'> Bounty #001</td>
          </tr>
          <tr>
            <td class='td-left'> Bounty #002</td>
          </tr>

        </table>

        <table class='mission-info mission-current'>
          <tr class='page-header'>
            <th>
              Current Mission
            </th>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'> Mission Name </td>
          </tr>
          <tr >
            <td class='td-left'> First Mission </td>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'> Mission Type </td>
          </tr>
          <tr >
            <td class='td-left'> Mining </td>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'> Reward </td>
          </tr>
          <tr >
            <td class='td-left'> $100 </td>
          </tr>

          <tr class = 'mission-headers'>
            <td class='td-left'> Mission Decription </td>
          </tr>
          <tr >
            <td class='td-left mission-brief'>  </td>
          </tr>
        </table>


      </div>
    </div>
  </body>
</html>
