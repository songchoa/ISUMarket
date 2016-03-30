function popup() {

// Modal Initialization
	var modal = document.createElement("DIV");

	modal.setAttribute("id","myModal");
	modal.setAttribute("class","modal fade");
	modal.setAttribute("role","dialog");

	var div1 = document.createElement("DIV");

	div1.setAttribute("class","modal-dialog modal-lg");


	var div2 = document.createElement("DIV");

	div2.setAttribute("class","modal-content");

	var div3 = document.createElement("DIV");
	div3.setAttribute("class","modal-header");

	var btn = document.createElement("BUTTON");
	btn.setAttribute("type","button");
	btn.setAttribute("class","close");
	btn.setAttribute("data-dismiss","modal");
	var btntext = document.createTextNode(String.fromCharCode(215));
	btn.appendChild(btntext);

	var modalheader = document.createElement("H4");
	modalheader.setAttribute("class","modal-title");
	var titletext = document.createTextNode("What do you want to sell?");
	modalheader.appendChild(titletext);

	var div4 = document.createElement("DIV");
	div4.setAttribute("class","modal-body");
	var form = document.createElement("FORM");
	form.setAttribute("action","additem.php");
	form.setAttribute("method","post");
////

// Upload image form	
	var uploadform = document.createElement("FORM");
	uploadform.setAttribute("action","upload.php");
	uploadform.setAttribute("method","post");
	uploadform.setAttribute("enctype","multipart/form-data");
	uploadform.setAttribute("class","form-inline");
	uploadform.setAttribute("role","form");

	var uploadform_image_div = document.createElement("DIV");
	uploadform_image_div.setAttribute("class","form-group");

	var uploadform_image_div_label = document.createElement("LABEL");
	uploadform_image_div_label.setAttribute("for","image");

	var uploadform_image_div_label_text = document.createTextNode("Image: " + String.fromCharCode(160));
	uploadform_image_div_label.appendChild(uploadform_image_div_label_text);


	var uploadform_image_div_input = document.createElement("INPUT");
	uploadform_image_div_input.setAttribute("type","file");
	uploadform_image_div_input.setAttribute("class","form-control");
	uploadform_image_div_input.setAttribute("id","fileToUpload");
	uploadform_image_div_input.setAttribute("placeholder","image not uploaded");
	uploadform_image_div_input.setAttribute("name","fileToUpload");

	uploadform_image_div.appendChild(uploadform_image_div_label);
	uploadform_image_div.appendChild(uploadform_image_div_input);

	var uploadform_submit = document.createElement("BUTTON");
	uploadform_submit.setAttribute("type","submit");
	uploadform_submit.setAttribute("class","btn btn-info");
	var uploadform_submit_label = document.createTextNode("upload");
	uploadform_submit.appendChild(uploadform_submit_label);
	uploadform.appendChild(uploadform_image_div);
	uploadform.appendChild(uploadform_submit);
//// 

// Description form 	
	var descform = document.createElement("FORM");
	descform.setAttribute("class","form-vertical");
	descform.setAttribute("role","form");
	
	var formgroup_title = document.createElement("DIV");
	formgroup_title.setAttribute("class","form-group");
	var formgroup_title_label = document.createElement("LABEL");
	formgroup_title_label.setAttribute("for","title");
	var formgroup_title_label_text = document.createTextNode("Title:");
	formgroup_title_label.appendChild(formgroup_title_label_text);
	var formgroup_title_input = document.createElement("INPUT");
	formgroup_title_input.setAttribute("type","text");
	formgroup_title_input.setAttribute("class","form-control");
	formgroup_title_input.setAttribute("id","title");
	formgroup_title_input.setAttribute("placeholder","Enter the post title");
	formgroup_title.appendChild(formgroup_title_label);
	formgroup_title.appendChild(formgroup_title_input);

	
	descform.appendChild(formgroup_title);

	var formgroup_intro = document.createElement("DIV");
	formgroup_intro.setAttribute("class","form-group");
	var formgroup_intro_label = document.createElement("LABEL");
	formgroup_intro_label.setAttribute("for","intro");
	var formgroup_intro_label_text = document.createTextNode("Brief Intro:");
	formgroup_intro_label.appendChild(formgroup_intro_label_text);
	var formgroup_intro_input_div = document.createElement("DIV");
	var formgroup_intro_input = document.createElement("INPUT");
	formgroup_intro_input.setAttribute("type","text");
	formgroup_intro_input.setAttribute("class","form-control");
	formgroup_intro_input.setAttribute("id","intro");
	formgroup_intro_input.setAttribute("placeholder","Enter the brief introductino to your item");
	formgroup_intro.appendChild(formgroup_intro_label);
	formgroup_intro.appendChild(formgroup_intro_input);

	descform.appendChild(formgroup_intro);

	var formgroup_price = document.createElement("DIV");
	formgroup_price.setAttribute("class","form-group");
	var formgroup_price_label = document.createElement("LABEL");
	formgroup_price_label.setAttribute("for","price");
	var formgroup_price_label_text = document.createTextNode("Price:");
	formgroup_price_label.appendChild(formgroup_price_label_text);
	var formgroup_price_input = document.createElement("INPUT");
	formgroup_price_input.setAttribute("type","text");
	formgroup_price_input.setAttribute("class","form-control");
	formgroup_price_input.setAttribute("id","price");
	formgroup_price_input.setAttribute("placeholder","Enter the a price for your item");
	formgroup_price.appendChild(formgroup_price_label);
	formgroup_price.appendChild(formgroup_price_input);

	descform.appendChild(formgroup_price);

	var formgroup_contact = document.createElement("DIV");
	formgroup_contact.setAttribute("class","form-group");
	var formgroup_contact_label = document.createElement("LABEL");
	formgroup_contact_label.setAttribute("for","contact");
	var formgroup_contact_label_text = document.createTextNode("Contact:");
	formgroup_contact_label.appendChild(formgroup_contact_label_text);
	var formgroup_contact_input = document.createElement("INPUT");
	formgroup_contact_input.setAttribute("type","text");
	formgroup_contact_input.setAttribute("class","form-control");
	formgroup_contact_input.setAttribute("id","Contact");
	formgroup_contact_input.setAttribute("placeholder","Enter your contact information");
	formgroup_contact.appendChild(formgroup_contact_label);
	formgroup_contact.appendChild(formgroup_contact_input);

	descform.appendChild(formgroup_contact);
////

// Submit and cancel button
	var form_submit = document.createElement("INPUT");
	form_submit.setAttribute("type","submit");
	form_submit.setAttribute("value","submit");
	form_submit.setAttribute("class","btn btn-success");

	var close_button = document.createElement("INPUT");
	close_button.setAttribute("type","button");
	close_button.setAttribute("class","btn btn-danger");
	close_button.setAttribute("data-dismiss","modal");
	close_button.setAttribute("value","Cancel")
////

// Attach all 'divs' to main container
	form.appendChild(uploadform);
	form.appendChild(descform);
	form.appendChild(form_submit);
	form.appendChild(close_button);
	div4.appendChild(form);

	div3.appendChild(btn);
	div3.appendChild(modalheader);

	div2.appendChild(div3);
	div2.appendChild(div4);

	div1.appendChild(div2);

	modal.appendChild(div1);
////

// Attach whole modal to HTML
	document.body.appendChild(modal);
////


}