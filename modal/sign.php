<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3 class="cent">新增報名</h3>
    <hr>
    <table style="margin:auto">
        <tr>
            <td style="text-align:right">報名日期：</td>
            <td><input type="text" name="date"></td>
        </tr>
        <tr>
            <td style="text-align:right">報考資格：</td>
            <td><textarea name="qual" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style="text-align:right">相關規定：</td>
            <td><textarea name="rule" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td style="text-align:right">錄取方式：</td>
            <td> <textarea name="enroll" id="" cols="30" rows="10"></textarea></td>
        </tr>

    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>