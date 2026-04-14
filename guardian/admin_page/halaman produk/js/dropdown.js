$('.dropdown-menu a').on('click', function(){    
    $(this).parent().parent().prev().html($(this).html());    
})