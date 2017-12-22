function testField(field) {
    if (field.value == "") {
        field.style.border = "2px solid red";
        field.placeholder = "Please fill out this field";
        return false;
    } else {
        return true;
    }
}

function clearField(e) {
    e.removeAttribute("style");
    e.removeAttribute("placeholder");
}

// Log in form

function checkLogin() {
    var form = document.forms.login;
    var name = form.elements.username;
    var password = form.elements.password;
    
    var testName = testField(name);
        
    var testPassword = testField(password);
        
    if (!testName || !testPassword) {
        return false;
    } else {
        return true;
    }
}

// Sign up form

function checkSignup() {
    var form = document.forms.signup;
    
    var name = form.elements.realname;
    var username = form.elements.username;
    var email = form.elements.email;
    var password = form.elements.password;
    
    var testName = testField(name);
    var testUsername = testField(username);
    var testEmail = testField(email);
    var testPassword = testField(password);
    
    if (!testName || !testUsername || !testEmail || !testPassword) {
        return false;
    } else {
        return true;
    }
    
}