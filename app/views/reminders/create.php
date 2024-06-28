<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <h1>Create a Reminder</h1>
  <form action="/reminders/create" method="post">
    <div>
      <label for="subject" class="form-label">Subject:</label>
      <input class="form-control" name="subject" type="text" id="subject" required>
    </div>
    <br>
    <button class="btn btn-dark" type="submit">Create a Reminder</button>
  </form>
</div>
<?php require_once 'app/views/templates/header.php' ?>