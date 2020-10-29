<?php include_once "base220.php";?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>卓越科技大學校園資訊系統</title>
    <!-- <link rel="stylesheet" href="plugins/bootstrap.min.css"> -->
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>

<body>
    <div> <marquee> <h2 style="color:red">訪客無管理權限</h2>  </marquee>  </div>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>

    <div id="main">

        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="dbor">
                    <!--主選單放此-->
                    <span class="t botli">後台管理選單</span>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title">
                        <div class="mainmu">網站標題管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
                        <div class="mainmu">校園映象資料管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
                        <div class="mainmu">進站總人數管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
                        <div class="mainmu">頁尾版權資料管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
                        <div class="mainmu">最新消息資料管理 </div>
                    </a>

                    <a style="color:#000; font-size:13px; text-decoration:none;" href="?do=sign">
                        <div class="mainmu">報名管理 </div>
                    </a>
                    <a style="color:#000; font-size:13px; text-decoration:none;" href="index.php">
                        <div class="mainmu" style="color:red;text-align:center"> 回首頁 </div>
                    </a>
                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :<?=$total['total'];?></span>
                </div>
            </div>
            <div class="di"
                style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
                <!--正中央-->
                <table width="100%">
                    <tbody>
                        <tr>
                            <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;"
                                class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                            </td>
                            <td><button onclick="lo(&#39;api/logout.php&#39;)"
                                    style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php

					$do=(!empty($_GET['do']))?$_GET['do']:"title";
					$file="custom/".$do.".php";
					if(file_exists($file)){
						include $file;
					}else{
						include "custom/title.php";
					}
				?>
            </div>

        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:20px;"><?=$bottom['bottom'];?></span>
            <br>
            <span class="t" style="line-height:15px;"><?=$bottom['bottom2'];?></span>
        </div>
    </div>

</body>

</html>