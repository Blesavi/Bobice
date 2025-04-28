jQuery(document).ready(function ($) {    

    function viewImage() {
        var src = $(this).attr('src');
        $.fancybox.open(src, {
            openEffect : 'none',
            closeEffect: 'none'
        });
    }
    
    $('.image').fancybox();

/*    var htmlModal = '<div id="myModal" class="modal">'
            + '<span class="close" onclick="document.getElementById(\'myModal\').style.display = \'none\'">&times;</span>'
            + '<img class="modal-img" id="img">'
            + '<div id="caption"></div>'
            + '</div>';
    $('body').append(htmlModal);


    var modal = $('#myModal');
    $('.image').click(function () {
        var src = $(this).attr('src');
        $('#myModal img').attr('src', src);
        modal.show();
    });

    $("#close").click(function () {
        modal.hide();
    });

    $("#myModal").click(function () {
        modal.hide();
    });*/
});