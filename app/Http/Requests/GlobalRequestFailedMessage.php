<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class GlobalRequestFailedMessage extends \Illuminate\Foundation\Http\FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        if ($validator->fails()) {
            $errors = (new ValidationException($validator))->errors();
            throw new HttpResponseException(
                response()->json([
                    'validations' => $errors,
                    "message" => 'Formulario invalido',
                    "data" => null,
                    'status' => false
                ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
            );
        }

        parent::failedValidation($validator);
    }
}
