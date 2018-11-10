
<script>
    $(document).ready(function() {

        {{-- Category Modal Open --}}
        $('#create_category_btn').on('click', function(event) {
            event.preventDefault();
            $.get('{{ URL::to("category/create") }}', function(data) {
                $('.modal-backdrop').remove(); // remove Black background Display Block Div 
                $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE
                $('#add_category_modal').modal('show'); // show or view Modal
            });
        });

    });
</script>
