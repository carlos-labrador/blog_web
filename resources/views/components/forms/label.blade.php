@props(['label'])
<label for="{{$label}}" class="block text-sm font-medium text-gray-700">
    {{ ucwords($label) }}
</label>