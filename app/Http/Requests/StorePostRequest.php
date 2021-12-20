<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
            'published_at' => 'required|date'
        ];
    }

    public function data()
    {
        $data = $this->only(['title', 'body','published_at']);
        $data['slug'] =  Str::slug($this->input('title'));
        return $data;
    }
}
