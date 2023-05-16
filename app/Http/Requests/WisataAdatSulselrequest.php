<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WisataAdatSulselrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_tempat_wisata' => 'required',
            'penjelasan_singkat' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_tempat_wisata.required' => 'Nama tempat wisata tidak boleh kosong',
            'penjelasan_singkat.required' => 'penjelasan tidak boleh kosong',
        ];
    }
}
