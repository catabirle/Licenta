<?php

namespace App\Http\Requests;

use App\Contact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'id_user'       => [
                'required',
                'integer',
            ],
            'date_from'    => [
                'required',
                'date_format:' . config('panel.date_format'),
                
                
            ],
            'date_to'      => [
                'required',
                'date_format:' . config('panel.date_format'),
                
            ],
            'name'       => [
                'required',
                'string',
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
                'string',
            ],
            'price'       => [
                
                'integer',
            ],
            'accept'       => [
                'boolean',
            ],
            'imageFile'       => [
                'nullable',
            ],
            'imageFile.*'       => [
                'nullable',
            ],
        ];
    }
}
