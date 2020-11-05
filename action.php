<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT name_product FROM product WHERE name_product LIKE :country';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['country' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll(); 

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['name_product'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">Không tìm thấy dữ liệu !</p>';
    }
  }
?>
