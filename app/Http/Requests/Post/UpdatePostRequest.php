<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|unique:posts,title,' . $this->post->id,
            'full_text' => 'required|max:2500',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable|array|min:1',
            'tags.*' => 'distinct:strict|exists:tags,id',
            'image' => 'nullable|mimetypes:image/png,image/jpeg|max:1024'
        ];
    }

    public function messages(): array
    {
        return [
            'tags.*.distinct' => 'Tags must be distinct',
            'tags.*.exists' => 'Tag not found'
        ];
    }
}
