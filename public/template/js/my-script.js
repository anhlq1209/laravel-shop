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

    // Upload Images
    uploadImage()
    submit()
    
    function uploadImage() {
        var button = $('.images .pic')
        var uploader = $('<input type="file" name="image[]" accept="image/*" />')
        var images = $('.images')
        
        button.on('click', function () {
            uploader.click()
        })
        
        uploader.on('change', function () {
            var reader = new FileReader();
            reader.onload = function(event) {
                images.prepend('<div class="img" style="background-image: url(\'' + event.target.result + '\');" rel="'+ event.target.result  +'"><span>remove</span></div>');
            }
            reader.readAsDataURL(uploader[0].files[0]);
        })
        
        images.on('click', '.img', function () {
            $(this).remove()
        })
    }
    
    function submit() {
        // Click
        $('#add').on('click', async function () {
            // Image
            var images = $('.images .img');
            var imageArr = [];
            
            for(var i = 0; i < images.length; i++) {
                imageArr.push({url: $(images[i]).attr('rel')})
            }

            // Variable
            var namePro = $('#name').val();
            var descriptionPro = CKEDITOR.instances['description'].getData();
            var categoryIdPro = $('#category_id').val();
            var pricePro = $('#price').val();
            
            // Add Product
            addProduct(namePro, descriptionPro, categoryIdPro, pricePro, imageArr);
        })
    }

    async function addProduct(namePro = '', descriptionPro = '', categoryIdPro = -1, pricePro = -1, imageArr = []) {
        
        console.log('name: ', namePro);
        console.log('des: ', descriptionPro);
        console.log('cate: ', categoryIdPro);
        console.log('price: ', pricePro);
        console.log('img', imageArr);

        // location.reload();
        
        $.post(

            '/admin/product/store',
            {
                'name':namePro,
                'description':descriptionPro,
                'category_id':categoryIdPro,
                'price':pricePro,
                'images':imageArr,
                '_token':$('meta[name="csrf-token"]').attr('content')
            },
            function(data) {
                alert(data);
            }

        )

    }

});
