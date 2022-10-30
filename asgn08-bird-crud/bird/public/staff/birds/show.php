<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0


$birds = Bird::find_by_id($id);

?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/birds/index.php'); ?>">&laquo; Back to List</a>

  <div class="bird show">


    <div class="attributes">
      <dl>
        <dt>Common Name</dt>
        <dd><?php echo h($birds->common_name); ?></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><?php echo h($birds->habitat); ?></dd>
      </dl>
      <dl>
        <dt>Food</dt>
        <dd><?php echo h($birds->food); ?></dd>
      </dl>
      <dl>
        <dt>Nest Placement</dt>
        <dd><?php echo h($birds->nest_palcement); ?></dd>
      </dl>
      <dl>
        <dt>Behavior</dt>
        <dd><?php echo h($birds->behavior); ?></dd>
      </dl>
      <dl>
        <dt>Conservation Level</dt>
        <dd><?php echo h($birds->conservation()); ?></dd>
      </dl>
      <dl>
        <dt>Backyard Tips</dt>
        <dd><?php echo h($birds->backyard_tips); ?></dd>
      </dl>
    </div>

  </div>

</div>
