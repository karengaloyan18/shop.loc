$(document).ready(function () {
    function reload() {
        $("#body").load('http://shop.loc/card')
    }
    $(".del").bind("click", function () {
        let val = $(this).val();
        let name = $(this).attr('name')
        // alert(name)
        //  alert(val)
        $.ajax({
            url: '/del',
            type: 'POST',
            data: {val: val,name: name},
            context: $(this),
            dataType: 'html',
            success: function () {
                reload()
                let value = $('#degenerad')
                // setTimeout(function(){
                    value.text(name +' removed from card')
                // },  1.5 * 1000);
                function hidemessage() {
                    value.hide()
                }
                setTimeout(hidemessage,7 * 1000)


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
        let count = 0
        // ++count
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
                if (count === 0){
                    $("#down").text('Product added to card')
                    console.log('yes')
                    ++count
                }else{
                    $("#down").text('Product already on card')
                }
            },
            error: function () {
                $("#down").text('Product already on card')
                // console.log('nooo');
                // alert(JSON.stringify(data));
            }
        });
        // ++count
        // $("#down").text('Product added to card')
        // alert('YOURE RIGHT');
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
