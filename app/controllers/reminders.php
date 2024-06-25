<?php

class Reminders extends Controller {

    public function index() {
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);
    }
  
    public function create() {
      $reminder = $this->model('Reminder');
      $this->view('reminders/create');
      // Form, looks like user signup, takes in subject, button that says create, added to reminders table and automatically add user_id, keep user_id in a session variable, 
    }
}
?>