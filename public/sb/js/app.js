$.ajax({
    type: "get",
    url: "/wilayah",
    dataType: "json",
    success: function (response) {
       response.map((value)=>{
            $('#provinsi').append($('<option>', {
                value : value.id,
                text : value.name
            }));
       })
    }
});

function daerah(id){
   $.ajax({
    type: "get",
    url: `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id}.json`,
    dataType: "json",
    success: function (response) {
        $('#kota').children().remove()
        response.map((value)=>{
            $('#kota').append($('<option>', {
                value : value.id,
                text : value.name,
            }));
       })
    }
   });
}