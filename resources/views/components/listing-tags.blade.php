@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp


<ul class="d-flex">
    @foreach ($tags as $tag)
        <li class="d-flex justify-content-center align-items-center badge badge-pill badge-success ">
            <a href="/?tag={{ $tag }} " class="text-light" >{{ $tag }}</a>
        </li>&nbsp;&nbsp;
    @endforeach
</ul>
