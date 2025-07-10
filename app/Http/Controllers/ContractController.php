<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function print(Contract $contract){
        $pdf = Pdf::loadView('contracts.print', compact('contract'));
        return $pdf->stream();
    }
}
