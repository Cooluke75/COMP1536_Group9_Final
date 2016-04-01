			/*Last name and first name's validation.*/ 
			$(document).ready(function(){
				$("#regForm").submit(function(e){
					var lastName = $("#lastName").val();
					var firstName = $("#firstName").val();
					if(firstName.length == 0 || lastName.length == 0){
						$("#hintNameValid").text("Please fill up your name.");
						e.preventDefault();
						} else {
						$("#hintNameValid").text("");
						}
					});
				});
				/*Gender selection validation.*/ 
				$(document).ready(function(){
				$("#regForm").submit(function(e){
					if($('input[type=radio]:checked').length == 0){
						$("#hintGenderValid").text("Please select your gender.");
						e.preventDefault();
						} else {
						$("#hintGenderValid").text("");
						}
					});
				});
				/*Email validation.*/ 
				$(document).ready(function(){
				$("#regForm").submit(function(e){
				var reg = /\S+@\S+\.\S+/;
					if(!reg.test($("#email").val())){
						$("#hintEmailValid").text("Please enter a valid Email Address.");
						e.preventDefault();
						} else {
						$("#hintEmailValid").text("");
						}
					});
				});
				/*Password validation.*/ 
				$(document).ready(function(){
				$("#regForm").submit(function(e){
				var reg1 = /[a-zA-Z0-9]{7,}/;
				var reg2 = /.*[a-z].*/;
				var reg3 = /.*[A-Z].*/;
				var reg4 = /.*[0-9].*/;
				var format = Boolean(reg1.test($("#password_0").val()) && reg2.test($("#password_0").val()) && reg3.test($("#password_0").val()) && reg4.test($("#password_0").val()));
					if(!format){
						$(".hintPasswordValid").css("color", "red");
						$(".hintPasswordValid").text("Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.");
						e.preventDefault();
						}
						else if($("#password_0").val() != $("#password_1").val()){
						$(".hintPasswordValid").css("color", "red");
						$(".hintPasswordValid").text("Two password are different.");
                        			e.preventDefault();
						} else {
						$(".hintPasswordValid").css("color", "#b3abb9");
						$(".hintPasswordValid").text("Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.");
						}
					});
				});
				
				
