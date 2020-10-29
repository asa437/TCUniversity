<?php include_once "base220.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>download</title>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="plugins/custom.css">
    <!-- 字型在css -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans@1&display=swap"
      rel="stylesheet">
    <script src="https://kit.fontawesome.com/145a02c86c.js" crossorigin="anonymous"></script>
    <script src="../plugins/jquery-3.5.1.min.js"></script>
    <script src="../plugins/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="d-flex justify-content-center">
  <a href="index.php"> <span class="btn btn-info h3 float-right m-3" > 回首頁 </span></a>
</div>


<form action="file/save_file.php" method="post" enctype="multipart/form-data" class="container my-1">
    檔案:<input class="my-1" type="file" name="upload" id="img"><br>
    說明:<input class="my-1" type="text" name="note"><br>
    <input type="submit" value="上傳">
</form>

<table class="table table-dark container">
<tr>
    <td>預覽</td>
    <td>檔名</td>
    <td>路徑</td>
    <td>類別</td>
    <td>說明</td>
    <td>上傳時間</td>
    <td>操作</td>
</tr>
<?php
    $table='file_info';
    $db=new DB($table);
    $rows=$db->all();
foreach($rows as $row){
?>
<tr>
    <td><img src='<?=$row['path'];?>' style="width:200px"></td>
    <td><?=$row['filename'];?></td>
    <td><?=$row['path'];?></td>
    <td><?=$row['type'];?></td>
    <td><?=$row['note'];?></td>
    <td><?=$row['upload_time'];?></td>

    <td>
        <a href='<?=$row['path'];?>' download> 下載</a>
    </td>
</tr>
<?php
}
?>
</table>


</body>
</html>
