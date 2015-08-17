@if(session()->has('flash_message'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message.title') }}",
            text: "{{ session('flash_message.message') }}",
            type: "{{ session('flash_message.level') }}",
            timer: 1700,
            showConfirmButton: true
        });

    </script>
@endif

@if(session()->has('flash_message_overlay'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text: "{{ session('flash_message_overlay.message') }}",
            type: "{{ session('flash_message_overlay.level') }}",
            showConfirmButton: true

        });

    </script>
@endif



@if(session()->has('flash_message_delete_overlay'))
    <script type="text/javascript">
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text: "{{ session('flash_message_overlay.message') }}",
            type: "{{ session('flash_message_overlay.level') }}",
            showConfirmButton: true
            showCancelButton: true
            confirmButtonColor: '#DD6B55'
            confirmButtonText: 'Yes, delete it!'
            closeOnConfirm: false
            closeOnCancel: false
        },
        function(){
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });

    </script>
@endif