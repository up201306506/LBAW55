$(document).ready(function() {
    $( "#profId" ).click(function() {
        if ($(this).is(':checked')) {
           $("#tableUsers > tbody > tr").each(function () 
            {
                var accounttype = $(this).find(".accounttype").html(); 
                if(accounttype === 'Professor'){
                    $(this).show();
                }
            });
        }else{
            $("#tableUsers > tbody > tr").each(function () 
            {
                var accounttype = $(this).find(".accounttype").html(); 
                if(accounttype === 'Professor'){
                    $(this).hide();
                }
            });
        }
    });
    
    $( "#studId" ).click(function() {
        if ($(this).is(':checked')) {
           $("#tableUsers > tbody > tr").each(function () 
            {
                var accounttype = $(this).find(".accounttype").html(); 
                if(accounttype === 'Student'){
                    $(this).show();
                }
            });
        }else{
            $("#tableUsers > tbody > tr").each(function () 
            {
                var accounttype = $(this).find(".accounttype").html(); 
                if(accounttype === 'Student'){
                    $(this).hide();
                }
            });
        }
    });
});