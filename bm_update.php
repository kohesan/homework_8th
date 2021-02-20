<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更

require_once('funcs.php');

//1. POSTデータ取得
$name   = $_POST["name"];
$url  = $_POST["url"];
$comment = $_POST["comment"];
$id    = $_POST["id"];

//2. DB接続します
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_bm_table SET name = :name, url = :url, comment = :comment, indate = sysdate() WHERE id = :id;");
$stmt->bindValue(':name', h($name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', h($url), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', h($comment), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', h($id), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect('index.php');
}
?>
