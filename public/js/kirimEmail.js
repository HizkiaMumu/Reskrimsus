var token = $('meta[name="csrf-token"]').attr('content');

$("#tombolKirimEmail").on("click", function(){

  $.ajax({
    method: "POST",
    url: "/kirim-email",
    data: {
      name: $("#nameSupportEmailForm").val(),
      address: $("#emailSupportEmailForm").val(),
      subject: $("#subjectSupportEmailForm").val(),
      message: $("#messageSupportEmailForm").val()
    },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }).done(function(res){
    console.log(res);
  });

});
