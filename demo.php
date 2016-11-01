<?php
require 'Prefix.class.php';

// 原始id
$user_id = 1001;
$order_id = 2016102743765214;
$message_id = 109283;

echo '<pre>';

// 已加前缀id
echo '1.id加前缀'.PHP_EOL;
$prefix_user_id = Prefix::getPrefixId($user_id, Prefix::USER_TYPE);
$prefix_order_id = Prefix::getPrefixId($order_id, Prefix::ORDER_TYPE);
$prefix_message_id = Prefix::getPRefixId($message_id, Prefix::MESSAGE_TYPE);

echo $prefix_user_id.PHP_EOL;
echo $prefix_order_id.PHP_EOL;
echo $prefix_message_id.PHP_EOL.PHP_EOL;

// 前缀类型
echo '2.根据已加前缀id获取前缀类型'.PHP_EOL;
echo Prefix::getPrefixType($prefix_user_id).PHP_EOL;
echo Prefix::getPrefixType($prefix_order_id).PHP_EOL;
echo Prefix::getPrefixType($prefix_message_id).PHP_EOL.PHP_EOL;

// 还原为原始id
echo '3.还原为原始id'.PHP_EOL;
echo Prefix::getId($prefix_user_id).PHP_EOL;
echo Prefix::getId($prefix_order_id).PHP_EOL;
echo Prefix::getId($prefix_message_id).PHP_EOL.PHP_EOL;
 
echo '</pre>';
?>
