<?php

namespace App\Exports;

use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BdToHtiRumusExport implements FromView
{
    protected $data;

    function __construct($data)
    {
        $this->data = $data;
    }
    
    public function view(): View
    {
        return view('reports.exports.bd-to-hti-rumus', [
            'records' => $this->data['records'],
            'period' => $this->data['period'],
        ]);
    }
}
