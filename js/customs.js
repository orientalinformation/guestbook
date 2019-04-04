$(document).ready(function() {
	$('#sendmessage').on("click", function() {
		var authorName = $('#author-name').val();
        var messageText = $('#message-text').val();

        $.ajax({
            type:"POST",
            url: "/includes/message.php",
            dataType: "json",
            data: { 
            	authorName: authorName, 
            	messageText: messageText
            },
	        error: function () {
		        console.log('error');
		    },
	        success : function(res) {
	            console.log(res);
	            flag = res.status;
	            msg = res.message;
	            if (!flag) {
	                toastr.error('Error!!!', msg);
	            } else {
	                toastr.success('SUCCSES!!!', msg);
	                window.location = "/";
	                $('#modelmessage').modal('hide');
	            }
	        }
        }); 
	});
});

$(document).ready(function() {
	$('#btnLogin').on("click", function() {
		var txtUser = $('#txtUser').val();
        var txtPassword = $('#txtPassword').val();

        $.ajax({
            type:"POST",
            url: "/includes/login.php",
            dataType: "json",
            data: { 
            	txtUser: txtUser, 
            	txtPassword: txtPassword
            },
	        error: function () {
		        console.log('error');
		    },
	        success : function(res) {
	            console.log(res);
	            flag = res.status;
	            msg = res.message;
	            if (!flag) {
	                toastr.error('Error!!!', msg);
	            } else {
	                toastr.success('SUCCSES!!!', msg);
	                window.location = "/";
	                $('#adminlogin').modal('hide');
	            }
	        }
        }); 
	});
});

function showEditMessage(id) {
	$.ajax({
        type:"GET",
        url: "/includes/edit.php",
        dataType: "json",
        data: { 
        	idMessage: id
        },
        error: function () {
	        console.log('error');
	    },
        success : function(res) {
            console.log(res);
            flag = res.id;
            if (!flag) {
                toastr.error('Error!!!', 'Can not load data');
            } else {
            	$('#editAuthor').val(res.author);
            	$('#editMessage').val(res.message);
            	$('#editId').val(res.id);
            	$('#editModelMessage').modal('show');
                // window.location = "/";
                // toastr.success('SUCCSES!!!', msg);
            }
        }
    });
}

function showDeleteMessage(id) {
	$.ajax({
        type:"POST",
        url: "/includes/delete.php",
        dataType: "json",
        data: { 
        	idMessage: id
        },
        error: function () {
	        console.log('error');
	    },
        success : function(res) {
            console.log(res);
            flag = res.status;
            msg = res.message;
            if (!flag) {
                toastr.error('Error!!!', msg);
            } else {
                window.location = "/";
                toastr.success('SUCCSES!!!', msg);
            }
        }
    });
}

$(document).ready(function() {
	$('#btnUpdateMessage').on("click", function() {
		var authorName = $('#editAuthor').val();
        var messageText = $('#editMessage').val();
        var idMessage = $('#editId').val();

        $.ajax({
            type:"POST",
            url: "/includes/update.php",
            dataType: "json",
            data: { 
            	authorName: authorName, 
            	messageText: messageText,
            	idMessage: idMessage
            },
	        error: function () {
		        console.log('error');
		    },
	        success : function(res) {
	            console.log(res);
	            flag = res.status;
	            msg = res.message;
	            if (!flag) {
	                toastr.error('Error!!!', msg);
	            } else {
	                window.location = "/";
	                $('#editModelMessage').modal('hide');
	                toastr.success('SUCCSES!!!', msg);
	            }
	        }
        }); 
	});
});