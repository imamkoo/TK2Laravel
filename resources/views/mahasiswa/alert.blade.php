@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $item)
        <li class="alert alert-danger list-unstyled">{{ $item }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

window.setTimeout(function() {
    $(".alert").fadeTo(1500, 500).slideUp(500, function(){
        $(this).remove();
    });
}, 500);

});
</script>
@endif
