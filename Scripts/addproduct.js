$(document).ready(function(){ 
 
    var count = 0;

    $('#user_dialog').dialog({
        autoOpen:false,
        width:400
    });

    $('#add').click(function(){
        $('#user_dialog').dialog('option', 'title', 'Add Data');
        $('#category_id').val('');
        $('#product_name').val('');
        $('#unit_in_stock').val('');
        $('#unit_price').val('');
        $('#image_url').val('');
        $('#error_category_id').text('');
        $('#error_product_name').text('');
        $('#error_unit_in_stock').text('');
        $('#error_unit_price').text('');
        $('#error_quentity_per_unit').text('');
        $('#error_image_url').text('');
        $('#category_id').css('border-color', '');
        $('#product_name').css('border-color', '');
        $('#unit_in_stock').css('border-color', '');
        $('#unit_price').css('border-color', '');
        $('#image_url').css('border-color', '');
        $('#save').text('Save');
        $('#user_dialog').dialog('open');
    });

    $('#save').click(function(){
        var error_category_id = '';
        var error_product_name = '';
        var error_unit_in_stock = '';
        var error_unit_price = '';
        var error_image_url = '';
        var category_id = '';
        var product_name = '';
        var unit_in_stock = '';
        var unit_price = '';
        var image_url = '';
        if ($('#category_id').val() == '') {
                error_category_id = 'Category ID is required';
                $('#error_category_id').text(error_category_id);
                $('#category_id').css('border-color', '#cc0000');
                category_id = '';
            } else {
                error_category_id = '';
                $('#error_category_id').text(error_category_id);
                $('#category_id').css('border-color', '');
                category_id = $('#category_id').val();
            }

            if ($('#product_name').val() == '') {
                error_product_name = 'Product Name is required';
                $('#error_product_name').text(error_product_name);
                $('#product_name').css('border-color', '#cc0000');
                product_name = '';
            } else {
                error_product_name = '';
                $('#error_product_name').text(error_product_name);
                $('#product_name').css('border-color', '');
                product_name = $('#product_name').val();
            }

            if ($('#unit_in_stock').val() == '') {
                error_unit_in_stock = 'Unit In Stock is required';
                $('#error_unit_in_stock').text(error_unit_in_stock);
                $('#unit_in_stock').css('border-color', '#cc0000');
                unit_in_stock = '';
            } else {
                error_unit_in_stock = '';
                $('#error_unit_in_stock').text(error_unit_in_stock);
                $('#unit_in_stock').css('border-color', '');
                unit_in_stock = $('#unit_in_stock').val();
            }

            if ($('#unit_price').val() == '') {
                error_unit_price = 'Unit Price is required';
                $('#error_unit_price').text(error_unit_price);
                $('#unit_price').css('border-color', '#cc0000');
                unit_price = '';
            } else {
                error_unit_price = '';
                $('#error_unit_price').text(error_unit_price);
                $('#unit_price').css('border-color', '');
                unit_price = $('#unit_price').val();
            }

            if ($('#image_url').val() == '') {
                error_image_url = 'Image URL is required';
                $('#error_image_url').text(error_image_url);
                $('#image_url').css('border-color', '#cc0000');
                image_url = '';
            } else {
                error_image_url = '';
                $('#error_image_url').text(error_image_url);
                $('#image_url').css('border-color', '');
                image_url = $('#image_url').val();
            }
        if (error_category_id != '' || error_product_name != '' || error_unit_in_stock != '' || error_unit_price != '' || error_image_url != '') {
            return false;
        }else{
            if($('#save').text() == 'Save'){
                count = count + 1;
                output = '<tr id="row_'+count+'">';
                output += '<td>' +category_id+ ' <input type="hidden" name="hidden_category_id" id="category_id' + count + '" class="category_id" value="' + category_id + '" /></td>';
                output += '<td>' +product_name+ ' <input type="hidden" name="hidden_product_name" id="product_name' + count + '" value="' + product_name + '" /></td>';
                output += '<td>' +unit_in_stock+ ' <input type="hidden" name="hidden_unit_in_stock" id="unit_in_stock' + count + '" value="' + unit_in_stock + '" /></td>';
                output += '<td>' +unit_price+ ' <input type="hidden" name="hidden_unit_price" id="unit_price' + count + '" value="' + unit_price + '" /></td>';
                output += '<td>' +image_url+ ' <input type="hidden" name="hidden_image_url" id="image_url' + count + '" value="' + image_url + '" /></td>';
                output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
                output += '</tr>';
                $('#user_data').append(output);
            }else{
                var row_id = $('#hidden_row_id').val();
                output = '<td>' + category_id + ' <input type="hidden" name="hidden_category_id[]" id="category_id' + row_id + '" class="category_id" value="' + category_id + '" /></td>';
                output += '<td>' + product_name + ' <input type="hidden" name="hidden_product_name[]" id="product_name' + row_id + '" value="' + product_name + '" /></td>';
                output += '<td>' + unit_in_stock + ' <input type="hidden" name="hidden_unit_in_stock[]" id="unit_in_stock' + row_id + '" class="unit_in_stock" value="' + unit_in_stock + '" /></td>';
                output += '<td>' + unit_price + ' <input type="hidden" name="hidden_unit_price[]" id="unit_price' + row_id + '" value="' + unit_price + '" /></td>';
                output += '<td>' + image_url + ' <input type="hidden" name="hidden_image_url[]" id="image_url' + row_id + '" value="' + image_url + '" /></td>';
                output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
                output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
                $('#row_'+row_id+'').html(output);
            }

            $('#user_dialog').dialog('close');
        }
    });

    $(document).on('click', '.view_details', function(){
        var row_id = $(this).attr("id");
        var category_id = $('#category_id' + row_id + '').val();
        var product_name = $('#product_name' + row_id + '').val();
        var unit_in_stock = $('#unit_in_stock' + row_id + '').val();
        var unit_price = $('#unit_price' + row_id + '').val();
        var image_url = $('#image_url' + row_id + '').val();
        $('#category_id').val(category_id);
        $('#product_name').val(product_name);
        $('#unit_in_stock').val(unit_in_stock);
        $('#unit_price').val(unit_price);
        $('#image_url').val(image_url);
        $('#save').text('Edit');
        $('#hidden_row_id').val(row_id);
        $('#user_dialog').dialog('option', 'title', 'Edit Data');
        $('#user_dialog').dialog('open');
    });

    $(document).on('click', '.remove_details', function(){
        var row_id = $(this).attr("id");
        if(confirm("Are you sure you want to remove this row data?")){
            $('#row_'+row_id+'').remove();
        }else{
            return false;
        }
    });

    $('#action_alert').dialog({
        autoOpen:false
    });

    $('#user_form').on('submit', function(event){
        event.preventDefault();
        var count_data = 0;
        $('.category_id').each(function(){
            count_data = count_data + 1;
        });
        if(count_data > 0){
            var form_data = $(this).serialize();
            $.ajax({    
                url:"../Api/productRequests/insertProductRequest.php",
                type:"POST",
                data:form_data,
                success:function(data){
                    if(data == "true") {
                        alert("Nu har laggt in ny produkt");
                    }else{
                        alert("Det gick fel!");
                    }
                    $('#user_data').find("tr:gt(0)").remove();
                    //$('#action_alert').html('<p>Data Inserted Successfully</p>');
                   // $('#action_alert').dialog('open');
                }
            });
        }else{
            $('#action_alert').html('<p>Please Add atleast one data</p>');
            $('#action_alert').dialog('open');
        }
    });
});  
