<?php

class Reminders extends Controller {

    public function index() {
      $reminder = $this->model('Reminder');
      //Keep user_id in a session variable. 
      $user_id = $_SESSION['user_id'];
      $list_of_reminders = $reminder->get_all_reminders($user_id);
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);
    }
  
    public function create() {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_SESSION['user_id'];
        $subject = $_REQUEST['subject'];
        $reminder = $this->model('Reminder');
        $reminder->create_reminder($user_id, $subject);
        header('Location: /reminders');
      }
      $this->view('reminders/create');
      //Form, looks like user signup, takes in subject, button that says create, added to reminders table and automatically add user_id, 
    }
      public function update($id) {
        $reminder = $this->model('Reminder');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $subject = $_REQUEST['subject'];
          $reminder->update_reminder($id, $subject);
          header('Location: /reminders');
        }
        $reminder_view = $reminder->get_all_reminders($id)[0];
        $this->view('reminders/update', ['reminder_view' => $reminder_view]);
      }
      public function delete($id) {
        $reminder = $this->model('Reminder');
        $reminder->delete_reminder($id);
        header('Location: /reminders');
      }
}
?>