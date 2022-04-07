<?php include 'inc/header.php'; ?>
<?php 
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php if(empty($feedback)): ?>
  <p>There is no fb</p>
<?php endif; ?>
<h2>Feedback</h2>
<?php foreach ($feedback as $item) : ?>
  <div class="card w-75 my-3">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name'] ?> on <?php echo $item['date'] ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
</div>
<?php include 'inc/footer.php'; ?>