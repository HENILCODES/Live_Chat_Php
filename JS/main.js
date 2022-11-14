$(document).ready(function () {
    $('#option').click(function () {
        $('#chat_B').slideToggle(500);
        $('#pdf_B').slideToggle(800);
    });
    $('#chat_B').click(function () {
        $('.opt').hide(500);
        $('#file_input').hide();
        $('#ChatsBox').show(100);
    });
    $('#pdf_B').click(function () {
        $('.opt').hide(500);
        $('#ChatsBox').hide();
        $('#file_input').show(100);
    });
});
