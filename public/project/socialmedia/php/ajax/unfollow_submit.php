<?php
session_start();
include_once '../../php/dbconnection.php';

if ($_SESSION['username'] != $_POST['username']) {
  $sql = "SELECT id FROM user WHERE username = '" . $_POST['username'] . "' LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $user_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $sql = "DELETE FROM follow WHERE user_id = '" . $_SESSION['user_id'] . "' AND followed_user_id = '" . $user_data[0]['id'] . "' ";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
  $stmt->bindParam(':followed_user_id', $user_data[0]['id'], PDO::PARAM_INT);
  $stmt->execute();
}
else {
  die(header("HTTP/1.0 400 Can't unfollow yourself if you're not following yourself"));
}
