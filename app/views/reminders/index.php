<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Reminders</h1>
        <p> <a href ="/reminders/create">Create a new reminder </a></p>
      </div>
    </div>
</div>

  <?php
    foreach ($data['reminders'] as $reminder) {
      echo "<p>" . $reminder['subject']. ' <a href="/reminder/update">update</a> <a href="/reminder/delete"> delete</a></p>';
      // Create model functions and functions in controllers. Timestamp, check off as completed
    } 
  
  ?>
  
  <?php // Do a loop and display each reminder in a list. Use a table> ?>
  <?php // Show reminder and have two links beside it ?>
  <?php require_once 'app/views/templates/footer.php' ?>