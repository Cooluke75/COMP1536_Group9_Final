function $$(id){
	var element = document.getElementById(id);
	if( element == null ) {
		//alert( "Programmer error: " + id + " does not exist." );
	}
	return element;
}

/*---------- Hide hints when form is reset ----------*/
function clearHints() {
    var hints = document.getElementsByClassName('hint');
    for(i = 0; i < hints.length; i++) {
        hints[i].style.visibility = "hidden";
    }
}

/*---------- Validate entire form ----------*/
function validateForm() {
    // Warn all invalid fields
    warnNameInvalid('txtFirstName');
    warnNameInvalid('txtLastName');
    warnEmailInvalid('txtEmail');
    warnPhoneInvalid('txtPhone');
    warnAddressInvalid('txtAddress');
    warnCityInvalid('selCity');
    warnCoverLetterInvalid('filCoverLetter');
    warnResumeInvalid('filResume');
    warnAboutInvalid('taAbout');

    // Check all fields
    if(!testNameValid('txtFirstName')) {
        return false;
    } else if(!testNameValid('txtLastName')) {
        return false;
    } else if(!testEmailValid('txtEmail')) {
        return false;
    } else if(!testPhoneValid('txtPhone')) {
        return false;
    } else if(!testAddressValid('txtAddress')) {
        return false;
    } else if(!testCityValid('selCity')) {
        return false;
    } else if(!testCoverLetterValid('filCoverLetter')) {
        return false;
    } else if(!testResumeValid('filResume')) {
        return false;
    } else if(!testAboutValid('taAbout')) {
        return false;
    } else {
        return true;
    }
}

/*---------- Highlights field if invalid ----------*/	
function warn(id, valid) {
	if(valid) {
	    $$(id).style.border = "none";
        $$(id + 'Hint').style.visibility = "hidden";
	}
    else {  
        $$(id).style.border = "2px solid red";
        $$(id + 'Hint').style.visibility = "visible";
    }
}

/*---------- Name validation ----------*/
function testNameValid(id) {
	return($$(id).value.length > 0);
}
			
function warnNameInvalid(id) {
    var valid = testNameValid(id);
	warn(id, valid);
}

/*---------- Email validation ----------*/
function testEmailValid(id) {
	var email = $$(id).value;

    // Email should have a "." and a "@"
	return (email.search(/\S+@\S+\.\S+/) == 0);
}
			
function warnEmailInvalid(id) {
    warn(id, testEmailValid(id));
}

/*---------- Phone validation ----------*/
function testPhoneValid(id) {
    var phoneStr = $$(id).value;

    // Phone format should be: 123-456-7890 or 123 456 7890
    var match = phoneStr.search(/[0-9]{3}[- ][0-9]{3}[- ][0-9]{4}/);

	return(match == 0);
}
			
function warnPhoneInvalid(id) {
    warn(id, testPhoneValid(id));
}

// Separates phone number with dashes as user types
function formatPhone(id, event) {
    var str = $$(id).value;
    var length = str.length;

    // Check if backspace is pressed
    if(event.keyCode == 8){
        if(length == 4 || length == 8) {
            $$(id).value = str.substring(0, length - 1); // Remove dash
        }
    } else if(length == 3 || length == 7) {
        $$(id).value += "-"; // Add dash
    }
}

/*---------- Address validation ----------*/
function testAddressValid(id) {
    return ($$(id).value.length > 0);
}
			
function warnAddressInvalid(id) {
    warn(id, testAddressValid(id));
}

/*---------- City validation ----------*/
function testCityValid(id) {
    return ($$(id).selectedIndex != 0);
}
			
function warnCityInvalid(id) {
    warn(id, testCityValid(id));
}

/*---------- Cover Letter validation ----------*/
function testCoverLetterValid(id) {
    var fileName = $$(id).value;

    return (fileName.endsWith(".pdf") || fileName.endsWith(".doc") || fileName.endsWith(".docx"));
}
			
function warnCoverLetterInvalid(id) {
    warn(id, testCoverLetterValid(id));
}

/*---------- Resume validation ----------*/
function testResumeValid(id) {
    var fileName = $$(id).value;

    return (fileName.endsWith(".pdf") || fileName.endsWith(".doc") || fileName.endsWith(".docx"));
}
			
function warnResumeInvalid(id) {
    warn(id, testResumeValid(id));
}

/*---------- About validation ----------*/
function testAboutValid(id) {
    return($$(id).value.length > 0);
}
			
function warnAboutInvalid(id) {
    warn(id, testAboutValid(id));
}