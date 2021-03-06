<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title' => 'required|min:6',
            'body' => 'required|min:6',
            'published_at' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
            'slug' => ['required', Rule::unique('posts', 'slug')],
        ];
    }
}
