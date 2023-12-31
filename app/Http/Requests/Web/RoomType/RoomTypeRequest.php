<?php

namespace App\Http\Requests\Web\RoomType;

use Illuminate\Foundation\Http\FormRequest;

class RoomTypeRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'nullable',
            'images' => 'nullable',
            'total_bed' => 'nullable'
            // 'lokasi' => 'nullable'
        ];
    }
}
