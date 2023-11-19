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
    submitHandler: function(form, event) {
        // loginProcess(event);
        // event.preventDefault();
    }
});

/* !! Login process  !! */
function loginProcess(e){ 
    e.preventDefault();
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

$('#sign_in_form').on('submit', function(e) {
    e.preventDefault(); 
    $.ajax({
        type: "POST",
        url: $('#sign_in_form').attr('action'),
        data: $(this).serialize(),
        success: function(data) {
            if(data.status){
                toastr.success(data.message);
                setTimeout(function(){
                    window.location.href = 'admin/home';
                }, 1000);
            }else{
                toastr.error(data.message);
            }
        },
        error: function(jqXHR, exception){
            toastr.error(getErrorMessage(jqXHR, exception));
        }
    });
});
