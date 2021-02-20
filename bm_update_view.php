<?php

/**
 * １．PHP
 * [ここでやりたいこと]
 * まず、クエリパラメータの確認 = GETで取得している内容を確認する
 * イメージは、select.phpで取得しているデータを一つだけ取得できるようにする。
 * →select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * ※SQLとデータ取得の箇所を修正します。
 */

//  var_dump($_GET)
require_once('funcs.php');
$pdo = db_conn();

$id = $_GET['id'];

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id =" .$id.";");
$status = $stmt->execute();


//３．データ表示
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}

?>
<!--
2．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ詳細</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">BOOK一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="bm_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>詳細データ更新</legend>
     <label>名前：<input type="text" name="name" value="<?= $row['name'] ?>"></label><br>
     <label>URL：<input type="text" name="url" value="<?= $row['url'] ?>"></label><br>
     <label><textArea name="comment" rows="4" cols="40"><?= $row['comment'] ?></textArea></label><br>
     <input type="hidden" name="id" value="<?= $row['id'] ?>">
     <input type="submit" value="更新">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
