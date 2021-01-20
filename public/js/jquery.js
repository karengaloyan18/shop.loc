$(document).ready(function () {
    function bozelo() {
        // jQuery.get('http://shop.loc/card')
        // window.location.href = 'http://shop.loc/card'
        $(".h3").load('http://shop.loc/card')
    }
    $(".del").bind("click", function () {
        let val = $(this).val();
        let name = $(this).attr('name')
        // alert(name)
         alert(val)
        $.ajax({
            url: '/del',
            type: 'POST',
            data: {val: val,name: name},
            context: $(this),
            dataType: 'html',
            success: function () {
                bozelo()
                                // jQuery.get('card')
            },
            error: function (data) {
                console.log(data)
                // document.write(data)
            }
        });
    })


    $(".button").bind("click", function () {
        let val = $(this).val();
        let valtwo = $(this).attr('name')
        // alert(val)
        $.ajax({
            url: '/card',
            type: 'POST',
            // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                val: val,
                valtwo: valtwo
            },
            context: $(this),
            dataType: 'html',
            success: function () {
                console.log('yess')
            },
            error: function () {
                console.log('nooo');
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
