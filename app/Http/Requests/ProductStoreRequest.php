<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'item_images' => 'required',
            'price' => 'required',
            'isPriceNegotiate' => 'boolean',
            'isPossibleToChange' => 'boolean',
            'description' => 'required|string',
            'sub_category_id' => 'required|integer|exists:sub_categorys,id',
            'shop_id' => 'required|integer|exists:shops,id',
            'quantity' => 'required|integer',
        ];
    }
}
