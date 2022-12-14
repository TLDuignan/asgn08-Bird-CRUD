<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <h2>Small Sampling of WNC Birds</h2>
    </div>

    <table id="inventory">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Behavior</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th>&nbsp;</th>
      </tr>

      <?php
      // changed from $bird to $birds
       $birds = Bird::find_all();
      ?>


      <?php foreach($birds as $bird) { ?>
      
      <tr>
        <td><?php echo $bird->common_name; ?></td>
        <td><?=  $bird->habitat; ?></td>
        <td><?=  $bird->food; ?></td>
        <td><?=  $bird->nest_palcement; ?></td>
        <td><?= $bird->behavior; ?></td>
        <td><?php echo $bird->conservation(); ?></td>
        <td><?= $bird->backyard_tips; ?></td>
        <td><a href="detail.php?id=<?php echo $bird->common_name; ?>">View</a></td>
      </tr>
      <?php } ?>
    </table>

    <?php

      // $sql = "SELECT * FROM bird";
      // $result = BIRD::$database->query($sql);

      //   echo 'Name: ' . $row['common_name'];
    
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
