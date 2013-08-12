ajax = {
	// Contains all responses,which should be
	// called after Ajax calls. (php -> Ajax class -> callback).
	// You can write response logic right inside this methods, or
	// call some class method,if function logic belongs to it.
	callbacks: {
		data: {},
		html_object: {},

		refresh: function()
		{
			location.reload(true);
		},

		redirect: function()
		{
			window.location.href = this.data.url;
		},

		updateFollowStatus: function()
		{
			var userId = this.data.userId;
			$(".update-follow-status-" + userId).html(this.data.newFollowStatus);
		},

		loadRepostForm: function()
		{
			var repostDiv = $(this.html_object).closest(".repost");
			var requestUrl = $(repostDiv).attr("data-repost-url");

			var submitButtonHtml = "<button type='button' class='submit'" +
										  " onclick='ajax.process_form(\"message-response-form\"," +
										  "                            \"" + requestUrl + "\"," +
										  "                            false, " +
				                    "                            \"message_response_form\")" +
										  "'>Add</button>";

			form_tools.message_response_form.show(
				"Repost message",
				repostDiv.attr("data-original-message-username") + " wrote:",
				"",
				repostDiv.attr("data-original-message-text"),
				"Repost text",
				"",
				submitButtonHtml
			);
		}
	},
	
	parse_server_answer: function(server_answer)
	{
		var result   = server_answer.result;
		var errors   = server_answer.errors;
		var callback = server_answer.callback;
		var data     = server_answer.data; 

		if(result == "ok")
		{
			if(callback != "none")
			{
				this.callbacks.data = data; 
				this.callbacks[callback]();
			} 
		}
		else
		{
			var error_message = "";

			for(error in errors)
			{
				error_message += errors[error] + "\n";
			}

			alert(error_message);
		}
	},
	
	enable_loading: function(loading_type)
	{
		switch(loading_type)
		{
			case "modal":
			case "modal_no_confirmation":
				modal_loading.show_loading();
			break;

			case "message_response_form":
				$("#message-response-form-loading").css("display", "block");
			break;
		}
	},
	
	disable_loading: function(loading_type)
	{
		switch(loading_type)
		{
			case "modal":
				modal_loading.show_confirmation_and_hide();
			break;
			
			case "modal_no_confirmation":
				modal_loading.hide_fast();
			break;

			case "message_response_form":
				$("#message-response-form-loading").css("display", "none");
			break;
		}
	},
	
	process: function(url,
							html_object,
							loading_type)
	{
		var loading_type = loading_type || "modal";
		this.enable_loading(loading_type);
		
		if(typeof(html_object) == 'object')
		{
			this.callbacks.html_object = html_object;
		}
		
		$.ajax({
			url: url,
			dataType: "json",
			context: this,

			success: function (data, textStatus)
			{
				if(typeof(data) == 'object')
				{
					this.parse_server_answer(data);
				}

				this.disable_loading(loading_type);
			}
		});
	},

	process_form: function(form_name,
								  url,
								  html_object,
								  loading_type)
	{
		var loading_type = loading_type || "form";
		this.enable_loading(loading_type);


		if(typeof(html_object) == 'object')
		{
			this.callbacks.html_object = html_object;
		}

		var form_data = $("form[name=" + form_name + "]").serialize();

		$.ajax({
			url: url,
			data: form_data,
			datatype: "json",
			context: this,

			success: function (data, textStatus)
			{
				if(typeof(data) == 'object')
				{
					this.parse_server_answer(data);
				}

				this.disable_loading(loading_type);
			}
		});
	}
}