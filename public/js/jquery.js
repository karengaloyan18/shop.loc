$(document).ready(function () {
    $(".button").bind( "click", function() {
        let val = $(this).val();
        $.ajax({
            url: '/card',
            type: 'POST',
            data: {val: val},
            context: $(this),
            dataType: 'json',
            success: function (data) {
                    console.log(data)
            },
            error: function (data) {
                console.log(data);
                // alert(JSON.stringify(data));
            }
        });
        // alert('YOURE RIGHT');
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
