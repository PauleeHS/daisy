$('table ul > li').on('click', function(){
    var index = $(this).parents('tr').index();
    // $('table tr:nth-of-type('+index+') li').removeClass('select');
    console.log(index);
    $(this).siblings('li').removeClass('select');
    $(this).addClass('select');
})