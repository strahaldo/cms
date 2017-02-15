<?php

require '../app/main.php';

$cards = $db->query("
    SELECT c_id, first_p, part, title, body, slug, s_id
    FROM cards
  ")->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['id'])) {
  var_dump($cards);
};

require VIEW_ROOT . '/admin/singleCard.php';