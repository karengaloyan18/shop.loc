$(document).ready(function () {

    $(".del").bind("click", function () {
        let name = $(this).attr('name')
        // alert(name)

        $.ajax({
            url: '/del',
            type: 'POST',
            data: {name: name},
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
    })


    $(".button").bind( "click", function() {
        let val = $(this).val();
        let valtwo = $(this).attr('name')
        alert(val)
        $.ajax({
            url: '/card',
            type: 'POST',
            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {val: val,
            valtwo: valtwo},
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
