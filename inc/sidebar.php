<div id='sidebar'>
  <table id='menu-info'>
      <tr>
        <th>Information</th>
      </tr>

      <tr>
        <td id='tdInfo'>
          <p>Name:
            <?php
              if (isset($playerUsername)){
                echo $playerUsername;
              }
            ?>
          </p>

          <p>Level:
            <?php
              if (isset($playerLevel)){
                echo $playerLevel;
              }
            ?>
          </p>
          <p>Money:
            <?php
              if (isset($playerMoney)){
                echo '$'.$playerMoney;
              }
            ?>
          </p>
          <p>Points:
            <?php
              if (isset($playerPoints)){
                echo $playerPoints;
              }
            ?>
          </p>
          <p>Sumpin:</p>
          <p>Thing:</p>
          <hr>
          Energy 100/100<br/>
          <div id='energy-bar'>
            <div id='energy-bar-inner'></div>
          </div>
          Fuel 100/100<br/>
          <div id='fuel-bar'>
            <div id='fuel-bar-inner'></div>
          </div>
          Life 100/100<br/>
          <div id='hp-bar'>
            <div id='hp-bar-inner'></div>
          </div>
          Shield 100/100<br/>
          <div id='shield-bar'>
            <div id='shield-bar-inner'></div>
          </div>
        </td>
      </tr>
    </table>

    <table id='areas'>
      <tr>
        <th>Areas</th>
      </tr>

      <tr >
        <td class='thing'>
          <a href="mail.php">
            <div class ='link'>
              <i class="fas fa-envelope"></i>Mail
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="info.php">
            <div class ='link'>
              <i class="fas fa-info-circle"></i>Info
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="region.php">
            <div class ='link'>
              <i class="fas fa-map-marker-alt"></i>Region
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="missions.php">
            <div class ='link'>
              <i class="fas fa-bookmark"></i>Missions
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="starchart.php">
            <div class ='link'>
              <i class="fas fa-code-branch"></i>Star Chart
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="skills.php">
            <div class ='link'>
              <i class="fas fa-book"></i>Skills
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="cargo.php">
            <div class ='link'>
              <i class="fas fa-pallet"></i>Cargo
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="job.php">
            <div class ='link'>
              <i class="fas fa-briefcase"></i>Job
            </div>
          </a>
        </td>
      </tr>

      <tr>
        <td>
          <a href="ships.php">
            <div class ='link'>
              <i class="fas fa-rocket"></i>Ships
            </div>
          </a>
        </td>
      </tr>

    </table>
</div>
