<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BOOK登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">BOOK一覧</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="select_user.php">ユーザー一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BOOK登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

<form method="post" action="insert_user.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="lpw"></label><br>
     <label>ユーザー権限：
     <input type="radio" name="kanri_flg" value=0>一般ユーザー
     <input type="radio" name="kanri_flg" value=1>管理者
     </label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
