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
    }
  
      public function update($id) {
        $reminder = $this->model('Reminder');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $subject = $_REQUEST['subject'];
          $reminder->update_reminder($id, $subject);
          header('Location: /reminders');
        }
        $this->view('reminders/update', ['id' => $id]);
      }
  
      public function delete($id) {
        $reminder = $this->model('Reminder');
        $reminder->delete_reminder($id);
        header('Location: /reminders');
      }

      public function completion($id) {
        $reminder = $this->model('Reminder');
        $reminder->completion($id);
        header('Location: /reminders');
      }
}
?>