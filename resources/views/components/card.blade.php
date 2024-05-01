<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 p-10 rounded']) }}>
    {{ $slot }}
</div>

{{-- the old one
     <div class="bg-gray-50 border border-gray-200 p-10 rounded">
    {{ $slot }}
    </div>
--}}
