function ajaxCall(id) {
    $.ajax({
        url: "products.php",
        type: "GET",
        data: {
            "id": id
        },

        success: function (resultado) {
            $("#container").html(resultado);

        }
    });
}