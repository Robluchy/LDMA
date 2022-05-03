function ajaxCall(id) {
    $.ajax({
        url: "products.php",
        type: "GET",
        data: {
            "categoria": id
        },

        success: function (resultado) {
            $("#container").html(resultado);

        }
    });
}
function addCart(id) {
    $.ajax({
        url: "addCart.php",
        type: "GET",
        data: {
            "id": id
        },

        success: function (resultado) {
            $("#container").html(resultado);

        }
    });
}