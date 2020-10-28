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

    <?php if(count($carts) > 0){ ?>
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
          <?php foreach($carts as $cart){ ?>
          <tr>
            <td><?php print(h($cart['name'])); ?></td>
            <td><?php print(h(number_format($cart['price']))); ?></td>
            <td><?php print(h(number_format($cart['price'] * $cart['amount']))); ?>円</td>
            <td><td>
          </tr>
          <?php } ?>
        </tbody>
    <?php } else { ?>
      <p>購入データはありません。</p>
    <?php } ?> 
  </div>
</body>
</html>