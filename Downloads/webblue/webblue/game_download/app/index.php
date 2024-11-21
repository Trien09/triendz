<?php
$_title = "NRO TEA - Cá Nhân ";
include_once '../head.php';
if($_login == null)
$_active = isset($_active) ? $_active : null;

?>

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Trả lời câu hỏi</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <th><div class="w-50" style='font-size:16px'><?php echo $_username; ?></div></th>
        	</div>
            <div class="form-group">
              <label for="comment">Viết câu trả lời của bạn:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Forum Ngọc Rồng Blue</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <div class="form-group">
	   <th><div class="w-50" style='font-size:16px'>Tài Khoản: <?php echo $_username; ?></div></th>
	</div>
    <div class="form-group">
      <label for="comment">Viết câu hỏi của bạn:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Đăng Bài">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

</body>
</html>
<?php
include_once '../end.php';
?>