<?php
      $comm_sql = "SELECT comments.id, comments.content, user.first_name, user.last_name FROM comments INNER JOIN user ON comments.author=user.id";
      try {
        $comments = $pdo->query($comm_sql)->fetchAll();
        $number_of_comments = $pdo->query("SELECT count(*) FROM comments")->fetchColumn();
        if ($number_of_comments === 0) {
          echo "<div class='alert alert-success' role='alert' id='no-comments'>Il n'y a aucun commentaire pour l'instant!</div>";
        }

        foreach ($comments as $comment) {
          echo "<div class='alert alert-dark' role='alert'><div>" . $comment['first_name'] . " " . $comment['last_name'] . "</div><div class='ms-3'>`" . $comment['content'] . "`</div></div>";

          $rep_sql = "SELECT replies.id, replies.content, user.first_name, user.last_name, replies.parent_comment FROM replies INNER JOIN user ON replies.author=user.id WHERE replies.parent_comment=" . $comment["id"] . ";";
          $replies = $pdo->query($rep_sql)->fetchAll();

          foreach ($replies as $reply) {
            echo "<div class='alert alert-light ms-3' role='alert'><div>" . $reply['first_name'] . " " . $reply['last_name'] . "</div><div class='ms-3'>`" . $reply['content'] . "`</div></div>";
          }

          echo "<form id='comment-" . $comment['id'] . "' name='comment-" . $comment['id'] . "' method='post' action='reply.php'>
          <input type='text' class='form-control' id='author' name='author' style='display: none;' value='" . $row['id'] . "'>
          <input type='text' class='form-control' id='parent_comment' name='parent_comment' style='display: none;' value='" . $comment['id'] . "'>
          <input type='text' class='form-control' id='content' name='content' placeholder='Ecrire une réponse...'>
          <div class='w-100 my-3 d-flex justify-content-end'><button type='submit' name='comment' class='btn btn-light' value='comment'>Répondre</button></div>
        </form>";
        }
      } catch (\Throwable $th) {
        echo "<div>There was an error loading comments</div>";
      }
      ?>