<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class PostRequest extends FormRequest
{
    /**
     * 認証関係の判定を行う場合はここに処理を記述する。
     * 特にない場合は常にtrueを返しておく。
     *
     * @return bool
     */
    public function authorize()
    {
        \Log::debug($this->path());
        if ($this->path() == 'post')
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * バリデーションのルールを記述する。
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_content' => 'required|max:1000'
        ];
    }

    /**
     *
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {

    }

    /**
     *
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

}
