$(function () {
    $(".form-horizontal").validate({
        rules:{
            user:{
                required:true,
                minlength:5
            },
            pass:{
                required:true,
                rangelength:[5,10]
            },
            code:{
                required:true
            }
        },
        messages:{
            user:{
                required:"用户名必填",
                minlength:"请输入至少5位"
            },
            pass:{
                required:"密码没有填写",
                rangelength:"密码长度应为5~10位之间"
            },
            code:{
                required:"验证码必填"
            }
        },
        errorPlacement: function(error, element) {
            // $('<br/>').appendTo(element.parent());
            error.appendTo(element.parent());
        }
    })
})