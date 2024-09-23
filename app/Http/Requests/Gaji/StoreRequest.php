<?php

namespace App\Http\Requests\Gaji;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_pegawai'    => 'required|exists:pegawai,id_pegawai',
            'gaji_pokok'    => 'required|numeric',
            'tunjangan'     => 'required|numeric',
            'rekening'      => 'required|string|max:20',
            'nama_bank'     => 'required|string|max:50',
        ];
    }
}