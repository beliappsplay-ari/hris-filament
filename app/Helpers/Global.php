<?php

use App\Budget;
use App\Models\Employee;
use App\Models\Setting;
use App\Overtime;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

function getSetting($key,$serialize = false){
	$setting = Setting::where('setting_key',$key)->first();

	if($setting){
		if($serialize){
			return unserialize($setting->setting_value);
		}

		return $setting->setting_value;		
	}

	return;

}

function toRp($angka,$prefix = true)
{	
	if(!$prefix){		
		return number_format($angka,0,',','.');
	}
 	return "Rp." . number_format($angka,0,',','.');	
}

function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " triliun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}
 
function terbilang($nilai,$postFix = false) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    if($postFix){
        $hasil .= ' rupiah';
    }
    return $hasil;
}

function singkatAngka($n, $presisi=2) {
	if ($n < 900) {
		$format_angka = number_format($n, $presisi);
		$simbol = '';
	} else if ($n < 900000) {
		$format_angka = number_format($n / 1000, $presisi);
		$simbol = 'Rb';
	} else if ($n < 900000000) {
		$format_angka = number_format($n / 1000000, $presisi);
		$simbol = 'Jt';
	} else if ($n < 900000000000) {
		$format_angka = number_format($n / 1000000000, $presisi);
		$simbol = 'M';
	} else {
		$format_angka = number_format($n / 1000000000000, $presisi);
		$simbol = 'T';
	}
 
	if ( $presisi > 0 ) {
		$pisah = '.' . str_repeat( '0', $presisi );
		$format_angka = str_replace( $pisah, '', $format_angka );
	}
	
	return $format_angka . $simbol;
}

function generateEMPNO(){
	$latestEmployee = Employee::latest()->first();
	if($latestEmployee){
		return ++$latestEmployee->empno;
	}else{
		return 'H0001';
	}
	
}
function statusLabel($auction,$isHtml = false)
{
	if($auction->hasReachStage(10,true) && $auction->status != 'deleted'){
		$auction->status = 'finish';
		$auction->save();
	}
	if($isHtml){
		if($auction->status == 'publish'){
			return '<span class="badge badge-light-primary">Proses</span>';
		}
		if($auction->status == 'finish'){
			return '<span class="badge badge-light-success">Selesai</span>';
		}
		if($auction->status == 'draft'){
			return '<span class="badge badge-light-theme-light">Konsep</span>';
		}
		if($auction->status == 'failed'){
			return '<span class="badge badge-light-danger">Gagal</span>';
		}
	}else{
		if($auction->status == 'publish'){
			return "Proses";
		}
		if($auction->status == 'finish'){
			return "Selesai";
		}
		if($auction->status == 'draft'){
			return "Konsep";
		}
		if($auction->status == 'failed'){
			return "Gagal";
		}
	}
}

function tanggal($tanggal,$format = '%d %B %Y')
{
	if($tanggal){
		return $tanggal->locale('id')->formatLocalized($format);
	}
	return null;
}

function makeZipWithFiles(string $zipPathAndName, $documents) {
    $zip = new ZipArchive();
    $tempFile = tmpfile();
    $tempFileUri = stream_get_meta_data($tempFile)['uri'];

    if ($zip->open($tempFileUri, ZipArchive::CREATE) !== TRUE) {
        echo 'Could not open ZIP file.';
        return;
    }

    // Add File in ZipArchive
    foreach($documents as $document)
    {
		$filename = explode('.',$document->pivot->file_url);
        $ext = $filename[count($filename)-1];
		// dd($document);
        if (! $zip->addFile(storage_path($document->pivot->file_url), $document->name.'.'.$ext)) {
            echo 'Could not add file to ZIP: ' . $document->pivot->file_url;
        }
    }
    // Close ZipArchive
    $zip->close();
    rename($tempFileUri, $zipPathAndName);
}

function isValidPeriod($period){
	// dd(strlen($period));
	if(strlen($period) != 6){
		return false;
	}
	$month = substr($period,4,2);

	return $month > 12 ? false : true;
}

function getPeriodOptions(){
	$period = new CarbonPeriod(now()->subMonths(6), '1 month', now()->addYears(1));
	$period = collect($period->map(function(Carbon $date){
		return $date->format('Ym');
	}));
	$formattedPeriod = [];
	foreach($period as $p){
		$formattedPeriod[$p] = $p;
	}
	return $formattedPeriod;
}