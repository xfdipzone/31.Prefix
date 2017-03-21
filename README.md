# 31.Prefix
## php ID前缀格式化类

本文介绍一个php实现的ID前缀格式化类，并提供代码演示。

## 介绍
数据库表通常都会有一个字段类型为int,命名为id的自增主键。<br>

优点：使用int类型可自增，且比字符类型节省存储空间。<br>
缺点：id是数值型，当要查询一个id对应的数据时，很难根据id判断是哪一个数据表。<br>

因此我们在存储时，应使用int，而在显示时对id进行一些处理，使很容易分辨这个id属于哪一个表。

<br>

## 演示代码
```php
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
```

<br>

## 输出
1.id加前缀<br>
U1001<br>
O2016102743765214<br>
M109283<br><br>

2.根据已加前缀id获取前缀类型<br>
user<br>
order<br>
message<br><br>

3.还原为原始id<br>
1001<br>
2016102743765214<br>
109283<br><br>


