$(document).ready(function(){

    // ADD
    $("#btnTambahParagraf").click(function(){
        $("p").append("(kalimat baru berhasil ditambahkan!)");
    });

    $("#btnTambahList").click(function(){
        $("ul").append("<li>Menu Baru: Es Teh Manis Dingin </li>");
    });

    // REMOVE
    $("#hapusKotak1").click(function(){
        $("#kotak1").remove();
    });

    // EMPTY
    $("#kosongKotak2").click(function(){
        $("#kotak2").empty();
    });

    // AJAX
    $("#ambilData").click(function(){
        $.ajax({
            url: "info.txt",
            success: function(data){
                $("#output").html(data);
            },
        });
    });

});
