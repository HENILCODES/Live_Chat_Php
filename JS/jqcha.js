$(document).ready(function(){
    $('#option').click(function(){
        $('#chat_B').slideToggle(500);
        $('#pdf_B').slideToggle(800);
    });
    $('#chat_B').click(function(){
        $('.opt').hide(500);
        $('#ChatsBox').show(100);
        document.getElementById("in").innerHTML="<input type='text' required class='input' id='ChatsBox' name='chat_u' autocomplete='off' placeholder='Type Message' title='Type Message'>";
    });
    $('#pdf_B').click(function(){
        $('.opt').hide(500);
        $('#ChatsBox').hide(100);
        document.getElementById("in").innerHTML="<input type='file' class='file_in none' id='file_input' name='file' >";
    });
});
