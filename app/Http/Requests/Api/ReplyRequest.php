<?php

namespace App\Http\Requests\Api;

class ReplyRequest extends FormRequest
{
    public $content;

    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }
}
