$(document).ready(function(){

    var url = "/inbox";

    //display modal form for task editing
    $('.open-modal').click(function(){
        var task_id = $(this).val();

        $.get(url + '/' + task_id, function (data) {
            //success data

            console.log(data);

          //  var json_obj = $.parseJSON(JSON.stringify(data));


            var tom = "toms";

            $('.task').val(tom);

            //alert(tom);

            //$('#myModal').modal('show');
        })
    });

});
