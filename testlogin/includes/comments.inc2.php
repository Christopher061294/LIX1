<?php
function setComments ($conn) {
  if (isset($_POST['commentSumbit'])){
    //echo"test";
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);

  }

  # code...
}

function getComments($conn) {
  $sql = "SELECT * FROM comments ORDER BY cid DESC";
  $result = mysqli_query($conn, $sql);

  while($row = $result->fetch_assoc()){
    $id = $row['uid'];
    $sql2 = "SELECT * FROM user WHERE id = '$id'";
    $result2 = mysqli_query($conn, $sql2);
    if ($row2 = $result2->fetch_assoc()){
      echo "<div class='comment-box'><p>";
      echo $row2['uid']."<br>";
      echo $row['date']."<br>";
      echo nl2br($row['message']);
      echo "</p>";
      if (isset($_SESSION['id']))
      {
        if ($_SESSION['id'] == $row2['id']){
          echo"<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <button type='sumbit' name='commentDelete' id ='deletebutton'>Delete</button>
          </form>
          <form class='edit-form' method='POST' action='editcomment2.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button id ='editbutton'>Edit</button>
          </form>";

        }
        else {
          echo"<form class='edit-form' method='POST' action='replycomment2.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <input type='hidden' name='uid2' value='".$row2['uid']."'>
            <input type='hidden' name='id' value='".$_SESSION['id']."'>


            <button type='sumbit' name='commentReply' id ='replybutton'>Reply</button>
          </form>";
        }
      }
      else {
        echo "<p class='commentmessage'>You need to be logged in to reply</p>";
      }

      echo "</div>";
    }


  }

}

function editComments ($conn) {
  if (isset($_POST['commentSumbit'])){
    //echo"test";
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);
    header("Location: comment2.php");
  }

  # code...
}

function replyComments ($conn) {
  if (isset($_POST['commentSumbit'])){
    //echo"test";

    $id = $_POST['id'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comments (uid, date, message) VALUES ('$id', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
    header("Location: comment2.php");
  }

  # code...
}

function deleteComments($conn){
  if (isset($_POST['commentDelete'])){

    $cid = $_POST['cid'];

    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = mysqli_query($conn, $sql);
    header("Location: comment2.php");
  }
}


?>
