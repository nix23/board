html_tools = {
	replies_list: {
		already_loaded_replies_ids: new Array(),
		message_id: null,
	   html_object: null,
		replies_wrapper_div: null,
		load_replies_url: null,

		toogle: function(id, html_object)
		{
			this.message_id  = id;
			this.html_object = html_object;
			this.load_replies_url = $(html_object).attr("data-load-replies-url");

			var repliesCount = $(html_object).siblings(".replies-count").find(".count").html();
			var action       = $(html_object).attr("data-action");

			if(parseInt(repliesCount) == 0)
			{
				alert("No replies to show.");
			}
			else
			{
				if(action == "show")
					this.show_after_loading_data();
				else
					this.hide();
			}
		},

	   show_after_loading_data: function()
		{
			if(jQuery.inArray(parseInt(this.message_id), this.already_loaded_replies_ids) == -1)
			{
				this.already_loaded_replies_ids.push(parseInt(this.message_id));
				ajax.process(this.load_replies_url, false, "modal_no_confirmation");
			}
			else
			{
				this.show();
			}
		},

		update_html: function(repliesHtml)
		{
			$("#replies-to-message-" + this.message_id).html(repliesHtml);
		},

		show: function()
		{
			$("#replies-to-message-" + this.message_id).toggle();
			$(this.html_object).attr("data-action", "hide");
			$(this.html_object).html("hide");
		},

	   hide: function()
		{
			$("#replies-to-message-" + this.message_id).toggle();
			$(this.html_object).attr("data-action", "show");
			$(this.html_object).html("show");
		}
	}
}