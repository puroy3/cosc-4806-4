<?php

class Reminder {

    public function __construct() {

    }

    public function get_all_reminders ($user_id) {
      $db = db_connect();
      $statement = $db->prepare("select id, subject, created_at, completed from notes where user_id = :user_id and deleted = 0 order by created_at desc");
      $statement->execute([':user_id' => $user_id]);
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function update_reminder ($id, $subject) {
      $db = db_connect();
      // do update statement
      $statement = $db->prepare("update notes set subject = :subject where id = :id");
      $statement->execute();
      $rows = $statement->rowCount();
      return $rows;
    }

    public function completion ($id) {
      $db = db_connect(); 
      $statement = $db->prepare("update notes set completed = not completed where id = :id");
      $statement->execute();
      $rows = $statement->rowCount();
      return $rows;
    }

    public function create_reminder ($user_id, $subject) {
      $db = db_connect();
      $statement = $db->prepare("insert into notes (user_id, subject, created_at) values (:user_id, :subject, NOW())");
      $statement->bindParam(':user_id', $user_id);
      $statement->bindParam(':subject', $subject);
      $statement->execute();
      $rows = $statement->rowCount();
      return $rows;
    }
  
    public function delete_reminder ($id) {
      $db = db_connect();
      $statement = $db->prepare("update notes set deleted = 1 where id = :id");
      $statement->execute();
      $rows = $statement->rowCount();
      return $rows;
    }
}
  ?>