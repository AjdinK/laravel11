@if (session()->has('message'))
    <div class="bg-laravel fixed left-1/2 top-0 -translate-x-1/2 transform px-48 py-3 text-white" x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 3000)" x-show="show">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
