$(document).ready(function () {
    $('#displaybtn').click(function (e) { 
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "fetchdata.php",
            data: $('#displaydata').serialize(),
            dataType: "html",
            success: function (response) {
                $('#messagedisplay').html(response);
            }
        });
        
    });
});