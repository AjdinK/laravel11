@props(['tagsCsv'])

<?php
$tags = explode(',', $tagsCsv);
?>

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="mr-2 rounded-xl bg-black px-3 py-1 text-white">
            <a href="/?tags={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
