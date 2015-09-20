<?php

namespace nuevo\Http\Requests;

use nuevo\Http\Requests\Request;

class CreateSerieRequest extends Request
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
      return = [
        'Name' => 'required|unique:series,Name',
        'Genre' => 'required|min:1',
        'Description' => 'required',
        'Seasons' => 'required',
        'file' => 'required|image',
        'Start' => 'required|date',
        'Finish' => 'required|date|after:Start',
      ];
    }
}
