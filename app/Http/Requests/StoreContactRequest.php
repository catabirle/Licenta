<?php

namespace App\Http\Requests;


use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreContactRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'id_user'       => [
                'required',
            ],
            'name'       => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'phone'       => [
                'required',
            ],
            'series' => [
                'required',
            ],
            'message'       => [
                'required',
            ],
            'price'       => [
                'required',
            ],
            'accept'       => [
                'required',
            ],
            'imageFile'       => [
                'nullable',
            ],
            'imageFile.*'       => [
                'nullable',
            ],
            'date_from'    => [
                'required',
                'date_format:' . config('panel.date_format'),
                
            ],
            'date_to'    => [
                'required',
                
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
