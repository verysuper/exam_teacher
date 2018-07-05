<?php
  if(!empty($_POST["myalt"])){
    $tt = date("YmdHis");
    $sql="insert into a_1_3_title_pic value(Null,'".$tt.".jpg','".$_POST["myalt"]."','0')";
    mysqli_query($link,$sql);
    copy($_FILES["mypic"]["tmp_name"],"nfgkjewqrhto3ty23984rh9fh32f/".$tt.".jpg");
    ?><script>document.location.href="admin.php"</script><?php
  }
    $sql="select * from a_1_3_title_pic";
    $or =mysqli_query($link,$sql);
    $oo = mysqli_fetch_assoc($or);
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
  <p class="t cent botli">網站標題管理</p>
  <form method="post">
    <table width="100%">
        <tr class="yel">
          <td width="45%">網站標題</td>
          <td width="23%">替代文字</td>
          <td width="7%">顯示</td>
          <td width="7%">刪除</td>
          <td></td>
        </tr>
<?php do{?>
        <tr>
          <td width="45%"><img src="nfgkjewqrhto3ty23984rh9fh32f/<?=$oo["a_1_3_t_p_title"]?>" width="300" height="30"></td>
          <td width="23%"><input name="my_alt[]" value="<?=$oo["a_1_3_t_p_alt"]?>"></td>
          <td width="7%"><input name="myupdate<?=$oo["a_1_3_t_p_seq"]?>" type="radio" value="1" <?php if($oo["a_1_3_t_p_look"]==1){echo "checked"; }?>></td>
          <td width="7%"><input type="checkbox" name="mydelete[]" value="1"></td>
          <td></td>
        </tr>
<?php }while($oo = mysqli_fetch_assoc($or));?>
    </table>
    <table style="margin-top:40px; width:70%;">
      <tbody>
        <tr>
          <td width="200px"><input type="button" onclick="op('#cover','#cvr','admin_1_3_add_pic.php')" value="新增網站標題圖片"></td>
          <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>    
  </form>
</div>