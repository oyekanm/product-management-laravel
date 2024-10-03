

$(document).ready(function () {
    $("#productForm").on("submit",(e)=>{
        e.preventDefault();
        const name = $("#productName").val();
        const quantity = $("#quantity").val();
        const price = $("#price").val();
        const target = e.target;
        const data = {
            productName:name,
            quantity,
            price
        }

        console.log(data)
        $.ajax({
            type: "POST",
            url: target.action,
            data: data,
            dataType: "Json",
            success: function (response) {
                console.log(response)
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // For CSRF protection
            },
        });
    })
});