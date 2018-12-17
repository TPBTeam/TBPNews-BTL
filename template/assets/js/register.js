$(document).ready(function() {

    $("input").keyup(function() {
        tagname = $(this).attr("name");
        val = $(this).val();
        pass = $("#password").val();
        // Viết AJAX	
        $.post('libs/ajax/register.php', { val: val, tagname: tagname ,pass: pass,}, function(data) {
            if(tagname == 'email'){
                $("#alertemail").html(data);
            }else if(tagname == 'username'){
                $("#alertuser").html(data);
            }else if(tagname == 'cfpassword'){
                $("#alertpass").html(data);
            }
        });
    });
});