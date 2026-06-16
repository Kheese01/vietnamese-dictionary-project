<?php
    $dsn = "mysql:dbname=dictionary;host=localhost;charset=utf8mb4";
    $username = "root";
    $password = "";
    $options = [];
    $pdo = new PDO($dsn, $username, $password, $options);
        if(@$_POST["word"] != ""){ //単語名の入力有無を確認
            $stmt = $pdo->query("SELECT * FROM word WHERE ID='".$_POST["id"] ."' OR Name LIKE  '%".$_POST["word_name"]."%')"); //SQL文を実行して、結果を$stmtに代入する。
        }
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>詳解ベトナム語辞典（個人）</title>
    <meta name="description" content="詳解ベトナム語辞典はオンライン辞書サイトです。">
</head>
<body>
<header id="pageHead">
    <h1>詳解ベトナム語辞典</h1>
</header>
<main>  
<section>
    <form>       
    </form>
    <table>
            <tr><th>ID</th><th>Word Name</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ($stmt as $row): ?>
                <tr><td><?php echo $row[0]?></td><td><?php echo $row[1]?></td></tr>
            <?php endforeach; ?>
    </table>
    <p id="output"></p>
</section>
</div><!-- /.container -->
</main>
<footer>
</footer>

</body>
</html>