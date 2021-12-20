@props(["type"=>"text",'name','label'])
<x-forms.row>
    <x-forms.label label="{{ $label ?? $name}}" />
    <input class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value'=> old($name),
    'type' => $type])}} aria-describedby="{{ $name }}">
    <x-forms.error name="{{ $name }}" />
</x-forms.row>