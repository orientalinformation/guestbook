<?php
include ('messages.php');
$messages = messages();
?>
<div class="row content">
	<div class="col-sm-3 sidenav">
		<div class="content-left">
			<img src="/images/hae.jpg">
			<hr>
			<h4>Guestbook</h4>
			<p>Feel free to leave us a short message to tell us what you think to our services</p>
			<button class="btn btn-danger" data-toggle="modal" data-target="#modelmessage">Post a Message</button>
		</div>
		<div class="position-admin">
			<button class="btn btn-light" data-toggle="modal" data-target="#adminlogin">Admin Login</button>
		</div>
	</div>
	<div class="col-sm-9 message">
		<div class="row">
			<?php
				foreach ($messages as $msg) {
					$action = '';
					$idMessage = $msg['id'];
					$date = $msg['update_date'];
					if (is_null($date)) $date = $msg['start_date'];

					if (isset($_SESSION["username"])) {
						$action = "<span class='iaction'>
									<i class='fa fa-pencil' onClick='showEditMessage($idMessage)'></i>
									<i class='fa fa-trash-o' onClick='showDeleteMessage($idMessage)'></i>
								</span>";
					}

					echo "
						<div class='col-sm-6 post'>
							<p>" .
								$msg['message'] .
							"</p>
							<b>".
								$msg['author'] .
							"</b>
							<div>
								<span class='htime'>".
									$date
								."</span>".
								$action 
								."
							</div>
						</div>
					";
				}
			?>
		</div>
		<div class="hpagination">
			<ol>
				<li><a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><span>3</span></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
			</ol>
		</div>
	</div>
</div>


<!-- Model admin -->
<div class="modal fade" id="adminlogin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-login">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">User:</label>
            <input type="text" class="form-control" id="txtUser">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="txtPassword">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnLogin">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- End model admin -->

<!-- Model message -->
<div class="modal fade" id="modelmessage" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-message">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Author:</label>
            <input type="text" class="form-control" id="author-name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="sendmessage">Send message</button>
      </div>
    </div>
  </div>
</div>
<!-- End model message -->

<!-- Model edit message -->
<div class="modal fade" id="editModelMessage" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-edit-message">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Author:</label>
            <input type="text" class="form-control" id="editAuthor" required>
            <input type="hidden" class="form-control" id="editId">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="editMessage" required></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpdateMessage">Update message</button>
      </div>
    </div>
  </div>
</div>
<!-- End model edit message -->