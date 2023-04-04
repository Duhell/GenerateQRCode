<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PageController extends Controller
{
    public function qrpage(){
        $name = User::find('1');
        $qr = QrCode::size(150)->format('png')->generate('127.0.0.1:8000');
        $fileName = 'student_qr_'.$name->name.'.png';
        $file = public_path('qrImg/'.$fileName);
        file_put_contents($file,$qr);
        $qrPatch = asset('qrImg/'.$fileName);
        return view('QR_page',['qrcodePath'=> $qrPatch,'filename'=>$fileName])->with('name',$name);
    }
}
