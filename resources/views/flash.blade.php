{{-- @if (Session::has('Status'))
        <div class="alert alert--{{Session::get('Status_Color')}}">{{Session::get('Status')}}</div>
@endif --}}

@if (session()->has('flash_message'))
	<script type="text/javascript">
	
            swal
          ({   title: "Error!",   
            text: "{{session()->get('flash_message')}}",  
             type: "info",   
            timer:2000,
            showConfirmButton:false
         });
        </script>
@endif