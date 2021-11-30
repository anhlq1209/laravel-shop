$(document).ready(function () {
    $('.btn-del-cate').click(function (e) {
        let idDel = $(this).val();

        let sure = confirm('Bạn có chắc muốn xóa Category Id: ' + idDel);

        if (sure) {
            $.post(
                '/admin/category/destroy/'+idDel,
                {'_token': $('meta[name="csrf-token"]').attr('content')},
                function(data) {
                    location.reload();
                }
            );
        }
    });

    $('.btn-del-pro').click(function (e) {
        let idDel = $(this).val();

        let sure = confirm('Bạn có chắc muốn xóa Product Id: ' + idDel);

        if (sure) {
            $.post(
                '/admin/product/destroy/'+idDel,
                {'_token': $('meta[name="csrf-token"]').attr('content')},
                function(data) {
                    location.reload();
                }
            );
        }
    });

    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
});