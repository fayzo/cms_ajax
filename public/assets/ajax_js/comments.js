
 $(document).ready(function (e) {
	    $("#form").on('submit',(function(e) {
		e.preventDefault();

                $.ajax({
                   url: 'core/ajax_db/comment_form_db.php',
                   dataType: 'text',
                   type: "POST",
			       data:new FormData(this),
			       contentType: false,
    	           cache: false,
			       processData:false,
                   beforeSend : function()
		        	{
		        		$("#preview").fadeOut();
		        		$("#err").fadeOut();

		        	},
                   success: function (response) {
                           alert(response);
                           console.log(response); 

                  }, error: function(e) {
		           		$("#err").html(e).fadeIn();
	               	} 	
                });
     }));
});
