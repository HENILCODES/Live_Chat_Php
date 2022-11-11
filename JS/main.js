$(document).ready(function () {
    document.getElementById("in").innerHTML = "<input type='text' required class='input' id='ChatsBox' name='chat_u' autocomplete='off' placeholder='Type Message' title='Type Message'>";

    $('#option').click(function () {
        $('#chat_B').slideToggle(500);
        $('#pdf_B').slideToggle(800);
    });
    $('#chat_B').click(function () {
        $('.opt').hide(500);
        $('#ChatsBox').show(100);
        document.getElementById("in").innerHTML = "<input type='text' required class='input' id='ChatsBox' name='chat_u' autocomplete='off' placeholder='Type Message' title='Type Message'>";
    });
    $('#pdf_B').click(function () {
        $('.opt').hide(500);
        $('#ChatsBox').hide(100);
        document.getElementById("in").innerHTML = "<input type='file' class='file_in none' id='file_input' name='file' >";
        // $('#file_input').on('change', function () {
        //     const size =
        //         (this.files[0].size / 1024 / 1024).toFixed(2);

        //     if (size > 4 || size < 2) {
        //         alert("File must be between the size of 2-4 MB");
        //         this
        //     } else {
        //         $("#output").html('<b>' +
        //             'This file size is: ' + size + " MB" + '</b>');
        //     }
        // });
    });
});
