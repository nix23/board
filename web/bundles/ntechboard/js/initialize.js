$(document).ready(function(){ 
	$.ajaxSetup({
		type: "POST"
	});

	// Window resize logic
	$(window).resize(function()
	{
		// Updating overlay
		if(overlay.is_active)
		{
			overlay.update_position();
		}

		if(form_tools.message_response_form.is_active)
		{
			form_tools.message_response_form.update_position();
		}

		if(form_tools.new_message_form.is_active)
		{
			form_tools.new_message_form.update_position();
		}
	});

	// Window scroll logic
	$(window).scroll(function()
	{
		// Update modal loading
		if(modal_loading.is_active)
		{
			modal_loading.update_position();
		}

		if(form_tools.message_response_form.is_active)
		{
			form_tools.message_response_form.update_position();
		}

		if(form_tools.new_message_form.is_active)
		{
			form_tools.new_message_form.update_position();
		}
	});
});