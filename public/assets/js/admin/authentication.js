alert();
$("#sign_in_form").validate({
    rules: {  
        email: {  
            required: true,  
            email: true,  
        },  
        password: {  
            required: true,  
        }  
    },  
    messages: {  
        password:{
            required: 'This password field is required',
        },
        email:{
            required: 'The email field is requied',
            email: 'Please enter a valid email',
        }
    },
    submitHandler: function(form) {
        loginProcess();
    }
});

/* !! Login process  !! */
function loginProcess(){
    alert('Do login.,');
}