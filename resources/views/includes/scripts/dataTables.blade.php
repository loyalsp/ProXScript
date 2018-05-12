<script src="{{ asset('js/datatables/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
    function removeRow(input,t) {

        tr = $(input).parent().parent();
        tr.fadeOut(t, function () {
            $(this).remove();
        });
    }
    function getDataTableData(route,columns) {
     return $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: route,
                data: function (d) {
                    d.id = $('select[id=id]').val();
                }
            },
            columns: columns
        });
}

    $(document).on("click", ".parent", function (event) {

        if ($('.parent').prop('checked') === true) {
            if ($("#action").val() !== "")
                $('#status_btn').removeClass('disable_btn');
            $('.child').prop('checked', true);
        }
        else {
            $('.child').prop('checked', false); // Unchecks it
            $('#status_btn').addClass('disable_btn');
        }
    });

    $(document).on("click", ".child", function (event) {
        if ($("#action").val() !== "" && $('.child').is(":checked"))

            $('#status_btn').removeClass('disable_btn');
        else {
            $('#status_btn').addClass('disable_btn');
        }
    });

    $(document).on('change', "#action", function (event) {
        val = $("#action").val();
        btn = $("#status_btn");
        if (val !== "" && $('.child').is(":checked")) {
            $('#status_btn').removeClass('disable_btn');
        }
        else {
            $('#status_btn').addClass('disable_btn');
        }

    });

    function updateStatusOrDelete(action,route,single_item) {
        t=100;
        $('#alert_delete').hide();
        var selectedItems = [];
        var n = $(".child:checked").length;
        if (n > 0) {
            jQuery(".child:checked").each(function () {
                selectedItems.push($(this).val());
            });
        }
        if(selectedItems.length>20)
        {
            t = 10;
            offset = 20
        }
        else{
            offset = 200;
        }
        if( single_item !== null)
            data = [single_item];
        else
        data = selectedItems;
        $.ajax({
            type: "post",
            url: route,
            data: {data: data, "action": action,_token:token},
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                if(action=='delete') {
                    for (i = 0; i < selectedItems.length; i++) {
                        input = '#' + selectedItems[i];
                        tr = $(input).parent().parent();
                        tr.css("background-color", "#b30000").fadeIn(1000);
                    }
                }
            },
            success: function (data) {
                var i = $("#status_box");
                if (data.status === 'success') {
                    selectedItemsCount = selectedItems.length;
                    $('#alert_delete').show();
                    $('#alert_delete').focus();
                    $('#status_btn').addClass('disable_btn');
            if(action=='delete') {
                for (i = 0; i < selectedItems.length; i++) {
                    input = '#' + selectedItems[i];
                    t = t + offset;
                    removeRow(input, t);

                }
            }
            else oTable.draw();
                    $('.parent').prop('checked', false);
                    $('.child').prop('checked', false);
                }
                else {
                    $('#alert_error').css('display', 'block');
                }
                $('html, body').animate({scrollTop:(0)}, 1000);
            }
        });
    }

    function updateOrDelete() {
        action = $("#action").val();
        checked_items = $(".child:checked").length;
        if(checked_items>0)
        {
            if(confirm('Are you sure to '+ $('#action option:selected').text() +' ?'))
                updateStatusOrDelete(action,"{{route('action')}}",single_item=null);
        }
    }
</script>
