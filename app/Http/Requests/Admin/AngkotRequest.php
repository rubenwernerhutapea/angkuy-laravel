<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AngkotRequest extends FormRequest
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
            'user_id' => 'required|exists:user,id',
            'nama' => 'required|max:255',
            'nomor' => 'required',
            'gambar' => 'required|image',
            'jurusan' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required',
            'map' => 'required',
        ];
    }
}
