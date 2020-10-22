-- テーブルの構造 `purchase_history`
--

CREATE TABLE `purchase_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `purchased_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(history_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- テーブルの構造 `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `history_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchased_price` int(11) NOT NULL,
  `purchased_amount` int(11) NOT NULL,
  PRIMARY KEY(detail_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;