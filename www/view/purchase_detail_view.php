<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入明細</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'cart.css'); ?>">
</head>
<body>
  <?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入明細</h1>
  <div class="container">

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if(count($list) > 0){ ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>注文番号</th>
            <th>購入日時</th>
            <th>合計金額</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php print(h($header['history_id'])); ?></td><!-- エスケープ処理の実装 -->
            <td><?php print(h($header['purchased_date'])); ?></td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($header['total_price']))); ?>円</td><!-- エスケープ処理の実装 -->
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>商品名</th>
            <th>価格</th>
            <th>購入数</th>
            <th>小計</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($list as $row){ ?>
          <tr>
            <td><?php print(h($row['name'])); ?></td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($row['purchased_price']))); ?>円</td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($row['purchased_amount']))); ?>個</td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($row['subtotal_price']))); ?>円</td><!-- エスケープ処理の実装 -->
          </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p>購入した商品はありません。</p>
    <?php } ?> 
  </div>
</body>
</html>