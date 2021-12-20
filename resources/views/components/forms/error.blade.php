@props(['name'])

@error($name)
<p class="text-danger text-sm mt-2" id="{{ $name }}">{{ $message }}</p>
@enderror