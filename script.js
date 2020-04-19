$('document').ready(function(){
    var username_state=false;
    var email_state=false;
    $('#username').on('blur',function(){
        var username = $('#username').val();
        if(username==''){
            username_state=false;
            return;
        }
        $.ajax({
            url:'register.php',
            type:'post',
            data:{
                'username_check':1,
                'username':username,
            },
            success:function(response){
                if (response=='taken'){
                    username_state=false;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass("form_error");
                    $('#username').siblings("span").text('ขออภัย ชื่อผู้ใช้งาน '+username+' มีคนใช้แล้ว กรุณาใช้ชื่อื่น');
                    $('#username').val('');
                }else if(response == 'not_taken'){
                    username_state=true;
                    $('#username').parent().removeClass();
                    $('#username').parent().addClass("form_success");
                    $('#username').siblings("span").text('ยังไม่มีชื่อผู้ใช้นี้ ท่านสามารถใช้ชื่อนี้ได้');
                }
            }
        });
    });
    $('#email').on('blur', function(){
        var email = $('#email').val();
        if(email==''){
            username_state=false;
            return;
        }
        $.ajax({
            url:'register.php',
            type:'POST',
            data:{
                'email_check':1,
                'email':email,
            },
            success:function(response){
                if(response=='taken'){
                    email_state=false;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass("form_error");
                    $('#email').siblings("span").text('Email: '+email+' มีการลงทะเบียนเรียบร้อยแล้ว');
                    $('#email').val('');
                }else if(response == 'not_taken'){
                    email_state=true;
                    $('#email').parent().removeClass();
                    $('#email').parent().addClass("form_success");
                    $('#email').siblings("span").text('สามารถใช้งาน email นี้ได้');
                }
            }
        });
    });
})