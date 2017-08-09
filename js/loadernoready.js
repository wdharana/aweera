
$("button").filter(".my-form-action").click(function(){
	var page = $(this).attr('formaction');
	$("#content").load(page);

	// to disable the default functionality of href in html, which ignores the href and  let jquery to do its thing
	return false;
});