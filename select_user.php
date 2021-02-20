<?php

require_once('funcs.php');

//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  // .=で上書きではなく，足していく
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

    if ($result['kanri_flg'] == 0) {
      $k_flg = '一般ユーザー';
    } else {
      $k_flg = '管理者';
    }

    $view .= '<p>';

    // 詳細ページリンク
    $view .= '<a href="bm_update_view_user.php?id='.$result["id"].'">';
    $view .= $result["name"]. ' : ' . $k_flg;
    $view .= '</a>';

    // 削除ページリンク
    $view .= '<a href="bm_delete_user.php?id='.$result["id"].'">';
    $view .= ' 【削除】 ';        
    $view .= '</a>';  

    $view .= '</p>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ユーザー登録</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">登録画面</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
