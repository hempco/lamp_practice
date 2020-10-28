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

    <?php if(count($carts) > 0){ ?>
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
          <?php foreach($carts as $cart){ ?>
          <tr>
            <td><?php print(h($cart['name'])); ?></td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($cart['price']))); ?>円</td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($cart['amount']))); ?>個</td><!-- エスケープ処理の実装 -->
            <td><?php print(h(number_format($cart['price'] * $cart['amount']))); ?>円</td><!-- エスケープ処理の実装 -->
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <p class="text-right">合計金額: <?php print number_format(h($total_price)); ?>円</p><!-- エスケープ処理の実装 -->
      <form method="post" action="finish.php">
      <input type="hidden" name="token" value="<?php print($token); ?>"> <!-- csrfトークンの埋め込み -->
        <input class="btn btn-block btn-primary" type="submit" value="購入する">
      </form>
    <?php } else { ?>
      <p>購入した商品はありません。</p>
    <?php } ?> 
  </div>
</body>
</html>