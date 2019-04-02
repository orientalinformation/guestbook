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
	                $('#modelmessage').modal('hide');
	            }
	        }
        }); 
	});
});