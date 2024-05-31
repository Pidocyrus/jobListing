@if(session()->has('message'))
<div x-date="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="fixed top-0 lef-1/2 tranform-translate-x-1/2 bg-laravel text-white px-48 py-3"> 
<p>{{ session('message') }}</p>
</div>
@endif