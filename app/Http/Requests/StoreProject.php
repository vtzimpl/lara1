<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
        return['projname'=>'required',
        'projnbr'=>'required',
        'projtype'=>'',
        'projstatus'=>'',
        'projmaker'=>'',
        'projdoc'=>'',
        'projcomments'=>'',
        'proj1stordername'=>'',
        'projunits'=>'',
        'proj1starrivaldate'=>'',
        'projopeneddate'=>'',
        'projprimetargetmarket'=>'',
        'projgraphics'=>'',
        'projpresentation'=>'',
        'projmaturityour'=>'',
        'projmaturitysupplier'=>'',
        'projsampletargetdate'=>'',
        'projprodtargetdate'=>'',
        'projpauseddate'=>'',
        'projreasonpaused'=>'',
        'projreasonrejected'=>'',
        'projrejecteddate'
    
    
    ];
    }
}
