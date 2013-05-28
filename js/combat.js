$(document).ready(function(){
    $('#combatForm').submit(function(){
        var str = $("form").serialize();
        $.ajax({
            type: "POST",
            url: "form.php",
            data:str,
            dataType:'json',
            success: function(html){
                $('#right').html(html.ch1.name);
                $('#left').html(html.ch2.name);
                var logArray = []
                logArray.push(html.log);
                $('#combatLog').html(html.log);
            },
            error: function (msg){
                alert('Error');
            }
        });
        return false;
    });

});
