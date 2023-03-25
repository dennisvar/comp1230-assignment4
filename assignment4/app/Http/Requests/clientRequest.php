<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientRequest extends FormRequest
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
            //
            'company' => 'required',
            'fname' => 'required|max:30',
            'lname' => 'required',
            'businessNumber' => 'required',
            'phone' => 'required',
            'cellNumber' => 'required',
            'carrier' => 'required',
            'hst' => 'required',
            'webSite' => 'required|url'
        ];
    }
    public function attributes(){
        return[
            'company' =>  'Company Name Field',
            'fname' => 'First Name Field',
            'lname' => 'Last Name Field',
            'businessNumber' => 'Business Number Field',
            'phone' => 'Phone Number Field',
            'cellNumber' => 'Cell Number Field',
            'carrier' => 'Carrier Field',
            'hst' => 'HST Field',
            'webSite' => 'WebSite URL Field'
        ];
    }
}
