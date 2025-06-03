<?php

namespace App\Modules\Management\BlogManagement\Blog\Validations;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class DataStoreValidation extends FormRequest
{
    /**
     * Determine if the  is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * validateError to make this request.
     */
    public function validateError($data)
    {
        $errorPayload =  $data->getMessages();
        return response(['status' => 'validation_error', 'errors' => $errorPayload], 422);
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->validateError($validator->errors()));
        if ($this->wantsJson() || $this->ajax()) {
            throw new HttpResponseException($this->validateError($validator->errors()));
        }
        parent::failedValidation($validator);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'blog_category_id' => 'required | sometimes',
            'title' => 'required | sometimes',
            'description' => 'required | sometimes',
            'tags' => 'required | sometimes',
            'publish_date' => 'required | sometimes',
            'writer' => 'required | sometimes',
            'meta_description' => 'required | sometimes',
            'meta_keywords' => 'required | sometimes',
            'thumbnail_image' => 'required | sometimes',
            'image' => 'required | sometimes',
            'blog_type' => 'required | sometimes',
            'url' => 'required | sometimes',
            'show_top' => 'required | sometimes',
            'status' => ['sometimes', Rule::in(['active', 'inactive'])],
        ];
    }
}