<?php

//echo `curl https://cmyip.com 2>/dev/null | grep -o "My IP Address is [0-9\.]*"`;
echo '<br><br>';
echo nl2br(`ip addr show | grep inet`);
echo '<br><br>';
echo $_SERVER['MYPARAM'];
echo '<br><br>';





$pdo = new \PDO(sprintf(
    "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
    getenv('DB_HOST'),
    getenv('DB_PORT'),
    getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASS')
));
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$pdo->exec("
CREATE TABLE IF NOT EXISTS test (
  text text NOT NULL,
 number integer NOT NULL
)
");

$stmt = $pdo->prepare ("INSERT INTO test VALUES (:text, :number)");
$stmt -> bindParam(':text', str_shuffle(implode('', range('A', 'Z'))));
$stmt -> bindParam(':number', rand(1,500));
$stmt -> execute();


$sth = $pdo->prepare("SELECT * FROM test ORDER BY text");
$sth->execute();

foreach($sth->fetchAll(PDO::FETCH_ASSOC) as $item) {
echo "${item['text']}: ${item['number']}<br>";
}
