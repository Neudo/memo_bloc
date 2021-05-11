<?php 

function getAllBlocs(){
  $db = dbConnect();
  $query = $db->query("SELECT * FROM bloc ORDER BY date ASC ");

  $posts = $query->fetchAll();
  return $posts;

}

function getBloc($blocId){
    $db = dbConnect();
    $query = $db->query("SELECT * FROM bloc WHERE id = " . $blocId);
  
    $bloc = $query->fetch();
    return $bloc;
  }


function addBloc($title, $description, $content, $color){
  $db = dbConnect();
  $query = $db->prepare('INSERT INTO bloc (title, description, content, color) VALUES (?, ?, ?, ?)');
  return $query->execute(
  [
      $title,
      $description,
      $content,
      $color
  ]
);
}

function deleteBloc($blocId) {
  $db = dbconnect();
  $query = $db->prepare('DELETE FROM bloc WHERE id = ?');
  return $query->execute([$blocId]);
  }



  function updateBloc($blocId, $data) {
        $db = dbconnect();

        $query = $db->prepare('UPDATE bloc SET title = :new_title, description = :new_description, content = :new_content, color = :new_color WHERE id = :bloc_id');
        return $query->execute(
        [
            'new_title' => $data['title'],
            'bloc_id' => $blocId,
            'new_summary' => $data['description'],
            'new_content' => $data['content'],
            'new_color' => $data['bg_color']
        ]
    );
}

?>