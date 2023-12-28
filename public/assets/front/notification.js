$(document).ready(function () {
    //Validate form
    if ($('#notification_form').length > 0) {
        $('#notification_form').validate({
            errorClass: 'error-msg',
            rules: {
                title: {required: true,maxlength: 50},
                date_time:{required: true},
                description:{required: true,maxlength: 150},
            },
            messages:{
                title:{
                    required: "The title field is required."
                },
                date_time:{
                    required: "The date & time field is required."
                },
                description:{
                    required: "The description field is required."
                },
            },
            submitHandler: function(form){
                storeNotificationAlert();
            }
        })
    }
})

/* setting timepicker */
$(document).ready(function () {
    $("#date_time").timepicker({
        'timeFormat': 'H:i a',
        'step': function(i) {
            return (i%2) ? 15 : 45;
        }
    });
});

/* !! Store the Alert Notification. !!*/
function storeNotificationAlert() {
    var formData = new FormData($('#notification_form')[0]);
    if(Notification.permission != 'granted'){
        toastr.error('Please allow notification permission');
        return false;
    }
    $.ajax({
        url: $('#notification_form').attr('action'),
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        beforeSend: function(){
            $('#submit-notification').addClass('btn-disable-process');
        },
        success: function(data){
            if(data.status){
                toastr.success(data.message);
                $('#notification_form').trigger('reset');
            }else{
                toastr.error(data.message);
            }
            $('#submit-notification').removeClass('btn-disable-process');
        },
        error: function(){
            $('#submit-notification').removeClass('btn-disable-process');
            alert('Something went wrong, please try later');
        }
    });
}
