<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入履歴</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'cart.css'); ?>">
</head>
<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入履歴</h1>
  <div class="container">

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if(count($list) > 0){ ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>注文番号</th>
            <th>購入日時</th>
            <th>合計金額</th>
            <th>購入明細表示</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($list as $row){ ?>
          <tr>
            <td><?php print(h($row['history_id'])); ?></td>
            <td><?php print(h($row['purchased_date'])); ?></td>
            <td><?php print(h(number_format($row['total_price']))); ?>円</td>
            <td>
              <form action = "purchase_detail.php">
                <input type = "submit" value = "購入明細表示">
                <input type = "hidden" name = "history_id" value = "<?php print(h($row['history_id'])); ?>">
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
    <?php } else { ?>
      <p>購入データはありません。</p>
    <?php } ?> 
  </div>
</body>
</html>