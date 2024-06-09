@if (session()->has('msg'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="alert alert-info">
        <p>{{ session('msg') }}</p>
    </div>
@endif
