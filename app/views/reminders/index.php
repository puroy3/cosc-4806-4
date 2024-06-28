<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Reminders</h1>
        <p> <a href="/reminders/create" class="btn btn-dark">Create a new reminder </a></p>
        <?php if (!empty($data['reminders'])): ?>
        <table class="table">
          <thead>
            <tr>
              <th>Subject</th>
              <th>Completed</th>
              <th>Created At</th>
              <th>Choose Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['reminders'] as $reminder): ?>
              <tr>
                <td><?=htmlspecialchars($reminder['subject'])?></td>
                <td><?= $reminder['completed'] ? 'Yes' : 'No'?></td>
                <td><?=htmlspecialchars($reminder['created_at'])?></td>
                <td>
                  <a href="/reminders/completion/<?=$reminder['id']?>" class="btn btn-sm <?=$reminder['completed'] ? 'btn-warning' : 'btn-success'?>"><?=$reminder['completed'] ? 'Incomplete' : 'Complete'?></a>
                  <a href="/reminders/update/<?=$reminder['id']?>" class="btn btn-sm btn-black">Update</a>
                  <a href="/reminders/delete/<?=$reminder['id']?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
                <!-- // echo "<p>" . $reminder['subject']. ' <a href="/reminder/update">update</a> <a href="/reminder/delete"> delete</a></p>';
                // Create model functions and functions in controllers. Timestamp, check off as completed
                //Form, looks like user signup, takes in subject, button that says create, added to reminders table and automatically add user_id.
                -->
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>There are no reminders.</p>
      <?php endif; ?>
      </div>
    </div>
</div>
  
  <?php // Do a loop and display each reminder in a list. Use a table> ?>
  <?php // Show reminder and have two links beside it ?>
  <?php require_once 'app/views/templates/footer.php' ?>