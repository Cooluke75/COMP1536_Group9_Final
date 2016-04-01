/*Contact Us Form.*/ 
$(document).ready(function(){
	$("#contact").submit(function(e){
		var name = $("#name1").val();
		if(name.length == 0){
			$("#hintNameValid1").text("Please fill up your name.");
			e.preventDefault();
			} else {
			$("#hintNameValid1").text("");
			}						
		});
	});

	$(document).ready(function(){
	$("#contact").submit(function(e){
	var email = /\S+@\S+\.\S+/;
		if(!email.test($("#email1").val())){
			$("#hintEmailValid1").text("Please enter a valid Email Address.");
			e.preventDefault();
			} else {
			$("#hintEmailValid1").text("");
			} 
		});
	});
				
	$(document).ready(function(){
	$('input:radio[name=comments]').click(function(){
		var checkfeedback = $(this).val();
		$('#Catagory_dropdown').prop('disabled',!(checkfeedback=="feedback"));
		});
	});

	$(document).ready(function(){
	$("#contact").submit(function(e){
		$("#feedback").prop('checked',true);
	});
});


	$(document).ready(function(){
	$("#contact").submit(function(e){
		var subject = $("#subject").val();
		if(subject.length == 0){
			$("#hintSubjectValid").text("Please fill in the subject.");
			e.preventDefault();
			} else {
			$("#hintSubjectValid").text("");
			} 
		});
	});
	
	$(document).ready(function(){
	$("#contact").submit(function(e){
		var message = $("#message").val();
		if(message.length == 0){
			$("#hintMessageValid").text("Please fill in the message.");
			e.preventDefault();
			} else {
			$("#hintMessageValid").text("");
			} 
		});
	});
