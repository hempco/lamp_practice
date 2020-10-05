-- テーブルの構造 `purchase_history`
--

CREATE TABLE `purchase_history` (
  `history_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchased_price` int(11) NOT NULL,
  `purchased_amount` int(11) NOT NULL,
  `purchased_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;