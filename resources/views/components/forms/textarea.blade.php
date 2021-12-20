@props(['name'])

<x-forms.row>
    <x-forms.label label="{{ $name }}" />
    <textarea class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes }} cols="30"
        rows="10">{{ $slot->isNotEmpty() ? $slot : old($name) }}</textarea>

    <x-forms.error name="{{ $name }}" />
</x-forms.row>