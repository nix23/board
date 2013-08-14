form_tools = {
	message_response_form: {
		is_active: false,
		replyClickedDiv: false,

		show: function(heading,
							firstRowLegend,
							firstRowSublabel,
							firstRowMessageText,
							secondRowLegend,
							secondRowSublabel,
							submitButtonHtml)
		{
			this.is_active = true;
			this.update_position();

			$("#message-response-form").find(".heading").find(".label").html(heading);
			$("#message-response-form").find(".first-row").find(".legend").html(firstRowLegend);
			$("#message-response-form").find(".first-row").find(".sublabel").html(firstRowSublabel);
			$("#message-response-form").find(".second-row").find(".legend").html(secondRowLegend);
			$("#message-response-form").find(".second-row").find(".sublabel").html(secondRowSublabel);
			$("#message-response-form").find(".footer").find(".save").html(submitButtonHtml);

			$("#message-response-form-message-text").val(firstRowMessageText);
			$("#message-response-form-response-text").val("");

			// Setting overlay
			overlay.hide_on_click = true;
			overlay.before_hide   = "close_message_response_form";
			overlay.show();

			$("#message-response-form").css("display", "block");
		},

		hide: function()
		{
			overlay.hide();
			$("#message-response-form").css("display", "none");
			this.is_active = false;
		},

		update_position: function()
		{
			var form_height     = parseInt($("#message-response-form").css("height"));
			var viewport_offset = ($(window).height() - form_height) / 2;
			var scroll_offset   = $(window).scrollTop();

			$("#message-response-form").css("top", (viewport_offset + scroll_offset) + "px");
		},

		load_reply_form: function(replyUrl,
										  username,
										  originalMessageText,
										  replyClickedDiv)
		{
			this.replyClickedDiv = replyClickedDiv;
			var submitButtonHtml = "<button type='button' class='submit'" +
										  " id='message-response-form-submit'" +
										  " onclick='ajax.process_form(\"message-response-form\"," +
										  "									 \"" + replyUrl + "\"," +
										  "                            false, " +
										  "									 \"message_response_form\")" +
										  "'>Add</button>";

			this.show(
				"Reply to message",
				username + " wrote:",
				"",
				originalMessageText,
				"Reply text<span class='required'>*</span>",
				"Min length - 5 chars.",
				submitButtonHtml
			);
		}
	},

	new_message_form: {
		is_active: false,

		show: function()
		{
			this.is_active = true;
			this.update_position();

			$("#new-message-form-text").val("");

			// Setting overlay
			overlay.hide_on_click = true;
			overlay.before_hide   = "close_new_message_form";
			overlay.show();

			$("#new-message-form").css("display", "block");
		},

		hide: function()
		{
			overlay.hide();
			$("#new-message-form").css("display", "none");
			this.is_active = false;
		},

		update_position: function()
		{
			var form_height     = parseInt($("#new-message-form").css("height"));
			var viewport_offset = ($(window).height() - form_height) / 2;
			var scroll_offset   = $(window).scrollTop();

			$("#new-message-form").css("top", (viewport_offset + scroll_offset) + "px");
		}
	}
}