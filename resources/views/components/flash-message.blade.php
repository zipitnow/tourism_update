@if(session()->has('message'))
<div class="position-absolute top-0 start-50 translate-middle-x bg-success text-white px-98 py-3">
<p>{{session('message')}}</p>
</div>
@endif
