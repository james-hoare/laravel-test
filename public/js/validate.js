window.onload = function() {
    var d1_heading = document.getElementById("div_one");
    var d2_heading = document.getElementById("div_two");
    var d3_heading = document.getElementById("div_three");
    var d1_next = document.getElementById("d1_next");
    var d2_next = document.getElementById("d2_next");
    
    // if variables are initialised, assign eventListeners to them
    // otherwise write an error out to a log file
    if (!d1_heading && !d2_heading && !d3_heading && !d1_next && !d2_next) {
        //error parsing element, write to log
    } else {
        d1_heading.addEventListener("click", function() { headingClicked('one') });
        d2_heading.addEventListener("click", function() { headingClicked('two') });
        d3_heading.addEventListener("click", function() { headingClicked('three') });
        d1_next.addEventListener("click", function() { headingClicked('two') });
        d2_next.addEventListener("click", function() { headingClicked('three') });
    }
}

// function that toggles the form divs based on the heading that was clicked
function headingClicked(heading) {
    var d1_details = document.getElementById("details_one");
    var d2_details = document.getElementById("details_two");
    var d3_details = document.getElementById("details_three");
    var fname = document.getElementById("firstName");
    var lname = document.getElementById("lastName");
    var email = document.getElementById("emailAdd");
    var mobile = document.getElementById("mobileNo");
    var gender = document.getElementById("gender");
    var dob = document.getElementById("dob");
    
    if (heading == "one"){
        if (d1_details.style.display == "block") {
            d1_details.style.display = "none";
        } else {
            d1_details.style.display = "block";
            d2_details.style.display = "none";
            d3_details.style.display = "none";
        }
    } else if (heading == "two") {
        // perform validation of fields before collapsing divs
        if (isPopulated(fname) && isPopulated(lname) && validateEmail(email)) {
            if (d2_details.style.display == "block") {
                d2_details.style.display = "none";
            } else {
                d1_details.style.display = "none";
                d2_details.style.display = "block";
                d3_details.style.display = "none";
            }
        } else {
            d1_details.style.display = "block";
        }
    } else if (heading == "three") {
        // perform validation of fields before collapsing divs
        if (validateMobile(mobile) && isPopulated(gender) && validateDate(dob)) {
            if (d3_details.style.display == "block") {
                d3_details.style.display = "none";
            } else {
                d1_details.style.display = "none";
                d2_details.style.display = "none";
                d3_details.style.display = "block";
            }
        }
    } else {
        //something has with heading value, write to log
    }
}

// function to perform a quick validation of fields to see if they populated with values
// will return false when there are issues, returns true if everything is okay
function isPopulated(element) {
    // check if text field is blank
    if (element.value == "" || element.value == null) {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else {
        element.style.border = "none";
        return true;
    }
}

// function to check email field is in correct format
// will return false when there are issues, returns true if everything is okay
function validateEmail(element) {
    // very basic regex to check for @something with .com or .net
    var email_regex = new RegExp("^\\S+@\\S+([.]com|net)$");

    // check if text field is blank and
    // validate text field against the regex
    // return true if everything is okay
    if (element.value == "" || element.value == null) {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else if (!email_regex.test(element.value)) {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    }else {
        element.style.border = "none";
        return true;
    }
}

// function to check mobile is in correct format
// will return false when there are issues, returns true if everything is okay
function validateMobile(element) {
    // basic regex for UK mobile numbers,
    // must start with 07-followed by 11 digits
    var mob_regex = new RegExp("^[0][7][\\d]{9}$");

    // check if text field is blank and
    // validate text field against the regex
    // return true if everything is okay
    if (element.value == "") {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else if (!mob_regex.test(element.value)) {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else {
        element.style.border = "none";
        return true;
    }
}

// function to check mobile is in correct format
function validateDate(element) {
    // basic regex for the date format, following:
    // DD/MM/YYYY formatting
    // note: I didn't cover leap years here
    var date_regex = new RegExp("^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\\d\\d$");

    // check if text field is blank and
    // validate text field against the regex
    // return true if everything is okay
    if (element.value == "") {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else if (!date_regex.test(element.value)) {
        element.focus();
        element.style.border = "2px solid red";
        return false;
    } else {
        element.style.border = "none";
        return true;
    }
}