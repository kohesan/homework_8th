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
$lid  = $_POST["lid"];
$lpw  = $_POST["lpw"];
$id    = $_POST["id"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

//2. DB接続します
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_user_table SET name = :name, lid = :lid, lpw = :lpw, kanri_flg = :kanri_flg, life_flg = :life_flg WHERE id = :id;");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    //*** function化する！*****************
    redirect('index.php');
}
?>
