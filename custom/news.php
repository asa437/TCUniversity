<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="68%">最新消息資料</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>

                </tr>
                <?php
                $table=$do;
                $db=new DB($table);
                $total=$db->count();
                $num=4;
                $pages=ceil($total/$num);
                $now=(!empty($_GET['p']))?$_GET['p']:1;
                $start=($now-1)*$num;
                $rows=$db->all([]," limit $start,$num");
                foreach($rows as $row){
                    $isChk=($row['sh']==1)?"checked":"";
                ?>
                <tr class="cent">
                    
                    <td><textarea name="text[]" style="width:90%;height:60px"><?=$row['text'];?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="cent">
        <?php
            if(($now-1)>0){
                echo "<a href='?do=$table&p=".($now-1)."' style='text-decoration:none;font-size:25px'> < </a>";
            }
            for($i=1;$i<=$pages;$i++){
                $fontsize=($now==$i)?'30px':'20px';
                echo "<a href='?do=$table&p=$i' style='text-decoration:none;font-size:$fontsize'> $i </a>";
            }
            if(($now+1)<=$pages){
                    echo "<a href='?do=$table&p=".($now+1)."' style='text-decoration:none;font-size:25px'> > </a>";
                }

        ?>
        </div>


    </form>
</div>