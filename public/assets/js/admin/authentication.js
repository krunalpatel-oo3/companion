/* !! Jq validate. Sign-in form !! */
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
    alert('HEE//');   
    var formData = new FormData($('#sign_in_form')[0]);
    $.ajax({
        url:$('#sign_in_form').attr('action'),
        data:formData,
        type: 'post',
        
        beforeSend: function(){
            
        },
        success: function(data){
            console.log(data);
        }
    });
    return false;
}