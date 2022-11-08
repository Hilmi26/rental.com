$.ajax({
    type: "get",
    url: "/wilayah",
    dataType: "json",
    success: function (response) {
        response.map((value) => {
            $('#provinsi').append($('<option>', {
                value: value.id,
                text: value.name
            }));
        })
    }
});

function daerah(id) {
    $.ajax({
        type: "get",
        url: `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id}.json`,
        dataType: "json",
        success: function (response) {
            $('#kota').children().remove()
            response.map((value) => {
                $('#kota').append($('<option>', {
                    value: value.name,
                    text: value.name,
                }));
            })
        }
    });


    let prov = $('#provinsi option:selected').text()
    console.log(prov);

    $('#provinsi2').val(prov)
}


$("#bayar").click(function (e) {
    e.preventDefault();


    $.ajax({
        type: "get",
        url: "midtrans",
        // data:[harga: 10000],
        dataType: "json",
        success: function (response) {
            snap.pay(response, {
                // Optional
                onSuccess: function (result) {
                },
                // Optional
                onPending: function (result) {
                },
                // Optional
                onError: function (result) {
                }
            });
        }
    });

});