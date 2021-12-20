<form {{ $attributes->merge(["method"=>"post","class" => "d-inline"]) }}>
    {{ csrf_field() }}
    @method('DELETE')
    <button class="btn btn-danger btn-sm" type="submit">
        <i class="bi bi-trash-fill"></i>
        Delete
    </button>
</form>