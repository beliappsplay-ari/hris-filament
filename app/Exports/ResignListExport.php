<?php

namespace App\Exports;

use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ResignListExport implements FromView, WithEvents
{
    protected $data;

    function __construct($data)
    {
        $this->data = $data;
    }
    
    public function view(): View
    {
        return view('reports.exports.resign-list', [
            'records' => $this->data['records'],
            'period' => $this->data['period'],
        ]);
    }

    public function registerEvents(): array
	{
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $title = 'A1:I4'; // All headers
	            $event->sheet->getDelegate()->getStyle('A1:AZ1000')->getFont()->setsize(6);
	            $event->sheet->getStyle('AE3:AE1000')->getNumberFormat()->setFormatCode('#,##0_-');
                
                $event->sheet->getColumnDimension('A')->setWidth(10);
                $event->sheet->getColumnDimension('B')->setWidth(10);
                $event->sheet->getColumnDimension('C')->setWidth(10);
                $event->sheet->getColumnDimension('D')->setWidth(10);
                $event->sheet->getColumnDimension('E')->setWidth(10);
                $event->sheet->getColumnDimension('F')->setWidth(10);
                $event->sheet->getColumnDimension('G')->setWidth(10);
                $event->sheet->getColumnDimension('H')->setWidth(10);
                $event->sheet->getColumnDimension('I')->setWidth(10);
                $event->sheet->getColumnDimension('J')->setWidth(10);
                $event->sheet->getColumnDimension('K')->setWidth(10);
                $event->sheet->getColumnDimension('L')->setWidth(10);
                $event->sheet->getColumnDimension('M')->setWidth(10);
                $event->sheet->getColumnDimension('N')->setWidth(10);
                $event->sheet->getColumnDimension('O')->setWidth(10);
                $event->sheet->getColumnDimension('P')->setWidth(10);
                $event->sheet->getColumnDimension('Q')->setWidth(10);
                $event->sheet->getColumnDimension('R')->setWidth(10);
                $event->sheet->getColumnDimension('S')->setWidth(10);
                $event->sheet->getColumnDimension('T')->setWidth(10);
                $event->sheet->getColumnDimension('U')->setWidth(10);
                $event->sheet->getColumnDimension('V')->setWidth(10);
                $event->sheet->getColumnDimension('W')->setWidth(10);
                $event->sheet->getColumnDimension('X')->setWidth(10);
                $event->sheet->getColumnDimension('Y')->setWidth(10);
                $event->sheet->getColumnDimension('Z')->setWidth(10);
                $event->sheet->getColumnDimension('AA')->setWidth(10);
                $event->sheet->getColumnDimension('AB')->setWidth(10);
                $event->sheet->getColumnDimension('AC')->setWidth(10);
                $event->sheet->getColumnDimension('AD')->setWidth(10);
                $event->sheet->getColumnDimension('AE')->setWidth(10);
                $event->sheet->getColumnDimension('AF')->setWidth(10);
                $event->sheet->getColumnDimension('AG')->setWidth(10);
                $event->sheet->getColumnDimension('AH')->setWidth(10);
                $event->sheet->getColumnDimension('AI')->setWidth(10);
                $event->sheet->getColumnDimension('AJ')->setWidth(10);
                $event->sheet->getColumnDimension('AK')->setWidth(10);
                $event->sheet->getColumnDimension('AL')->setWidth(10);
                $event->sheet->getColumnDimension('AM')->setWidth(10);
                $event->sheet->getColumnDimension('AN')->setWidth(10);
                $event->sheet->getColumnDimension('AO')->setWidth(10);
                $event->sheet->getColumnDimension('AP')->setWidth(10);
                $event->sheet->getColumnDimension('AQ')->setWidth(10);
                $event->sheet->getColumnDimension('AR')->setWidth(10);
            }
        ];
    }
}
