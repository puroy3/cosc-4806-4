<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <h1>Update the Reminder</h1>
  <?php if (isset($data['reminderData'])): ?>
  <form action="/reminders/update/<?= htmlspecialchars($data['reminderData']['id']) ?>" method="post">
    <div class="form-group">
      <label for="subject">Subject:</label>
      <input class="form-control" type="text" name="subject" id="subject" value="<?= htmlspecialchars($data['reminderData']['subject']) ?>" required>
</div>
    <br>
<button type="submit" class="btn btn-dark">Update</button>
  </form>
  <?php else: ?>
  <p> Error: Reminder data missing.</p>
  <?php endif; ?>
</div>
<?php require_once 'app/views/templates/footer.php' ?>