<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">報名管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="10%">報名日期</td>
                    <td width="20%">報考資格 </td>
                    <td width="20%">相關規定</td>
                    <td width="20%">錄取方式</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php
                $table=$do;
                $db=new DB($table);
                $rows=$db->all();
                foreach($rows as $row){
                    
                ?>
                <tr class="cent">
                    
                    <td><input type="text" name="date[]" value="<?=$row['date'];?>"></td>
                    <td><textarea style="width:98%" name="qual[]" id="" cols="30" rows="10"> <?=$row['qual'];?> </textarea></td>
                    <td><textarea style="width:98%" name="rule[]" id="" cols="30" rows="10"> <?=$row['rule'];?> </textarea></td>
                    <td><textarea style="width:98%" name="enroll[]" id="" cols="30" rows="10"> <?=$row['enroll'];?> </textarea></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


    </form>
</div>