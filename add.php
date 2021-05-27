<?php
$task=$_POST['task'];
if($task =='') {
    echo "Введите задание";
    exit();
}
$dsn ='mysql:host=localhost;dbname=to-do';
$pdo = new PDO($dsn,'mysql','mysql');

    $sql = 'INSERT INTO tasks(task) VALUES ( :task)';
    $query = $pdo->prepare($sql);
    $query->execute(['task' => $task]);

    header('Location: /');

?>