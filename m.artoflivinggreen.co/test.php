<?php
// current directory
echo getcwd() . "\n";

/* $dir    = '/home/collabor/public_html/artoflivinggreen.co/includes';
$files1 = scandir($dir);
print_r($files1);

define('DRUPAL_ROOT', '/home/collabor/public_html/artoflivinggreen.co');
include("/home/collabor/public_html/artoflivinggreen.co/includes/bootstrap.inc");
include("/home/collabor/public_html/artoflivinggreen.co/includes/password.inc");
drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
$email=mysql_escape_string('n.tsagkas@codeafactory.gr');
$result=db_query("SELECT u.uid, u.pass FROM {users} u WHERE u.name LIKE :email", array(":email" => db_like($email)))->fetchObject();

$pass = "testpassword"; // your password
$acc->pass = $result->pass; // needs to be password from database, don't forget to escape dollar signs
$correct = user_check_password($pass, $acc);
echo ($correct?"correct":"wrong");
print_r($result->uid);
$uid=30;
$result = db_query("SELECT li.line_item_label AS tour_id FROM commerce_order o 
JOIN commerce_line_item li ON o.order_id=li.order_id
WHERE o.uid=:uid AND o.status='completed'", array(":uid" => $uid))->fetchAll();
print_r($result); */
?>