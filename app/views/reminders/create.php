<!-- Form looks like user signup, takes in subject, button that says create, added to reminders table and automatically add user_id. -->
<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <h1>Create a new reminder</h1>
  <form action="/reminders/create" method="post">
    <div>
      <label for="subject" class="form-label">Subject:</label>
      <input class="form-control" name="subject" type="text" id="subject" required>
    </div>
    <br>
    <button class="btn btn-dark" type="submit">Create</button>
  </form>
</div>
<?php require_once 'app/views/templates/footer.php' ?>