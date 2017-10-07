<?php

namespace App\Http\Controllers;

use Log;
use App\Alumni;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AlumniController extends Controller
{
    public $major = [
        'คณิตศาสตร์' => 'คณิตศาสตร์',
        'ชีววิทยา' => 'ชีววิทยา',
        'เคมี' => 'เคมี',
        'ฟิสิกส์' => 'ฟิสิกส์',
        'สถิติ' => 'สถิติ',
        'วิทยาศาสตร์สิ่งแวดล้อม' => 'วิทยาศาสตร์สิ่งแวดล้อม',
        'วิทยาการคอมพิวเตอร์' => 'วิทยาการคอมพิวเตอร์',
        'จุลชีววิทยา' => 'จุลชีววิทยา',
        'คณิตศาสตร์ประยุกต์' => 'คณิตศาสตร์ประยุกต์',
        'เทคโนโลยีสารสนเทศ' => 'เทคโนโลยีสารสนเทศ'
    ];

    public $food = [
        'ทั่วไป' => 'ทั่วไป',
        'มังสวิรัติ' => 'มังสวิรัติ',
        'มุสลิม' => 'มุสลิม',
    ];

    public function firstStep()
    {
        return view('register.first');
    }

    public function handleFirstStep(Request $request)
    {
        session_start();
        $code = $request->get('code');
        $alumni = Alumni::where('code', $code)->first();

        if(sizeof($alumni) < 1){
            $_SESSION['user_code'] = $code;
            return redirect()->action('AlumniController@lastStep');
        }else{
            //return view('register.result', ['alumni' => $alumni]);
            return redirect()->action('AlumniController@registerResult', [
                'code' => $code
            ]);
        }
    }

    public function lastStep()
    {
        session_start();
        if(isset($_SESSION['user_code'])){
            $code = $_SESSION['user_code'];
            Log::info('user_code '. $code);

            return view('register.last', [
                'code' => $code,
                'major' => $this->major,
                'food' => $this->food
            ]);
        }else{
            Log::info('session is not set');
            return redirect()->action('AlumniController@firstStep');
        }
    }

    public function handleLastStep(Request $request)
    {
        $alumni = $request->all();

        $sc = $alumni['code'];
        $sc = substr($sc, 2, 2);
        $sc = intval($sc) - 14;

        $alumni['sc'] = $sc;

        $alumni = Alumni::create($alumni);
        return redirect()->action('AlumniController@registerResult', [
            'code' => $alumni->code
        ]);
    }

    public function registerResult($code)
    {
        $alumni = Alumni::where('code', $code)->firstOrFail();
        return view('register.result', [
            'alumni' => $alumni,
            'status' => 'ลงทะเบียนเสร็จสมบูรณ์'
        ]);
    }

    public function getQrCode($code)
    {
        $alumni = Alumni::where('code', $code)->firstOrFail();

        $qr = QrCode::format('png')
            ->size(300)
            ->merge('/public/image/sc-su-logo-eng.png', .15)
            ->errorCorrection('H')
            ->generate($alumni->code);

        return response($qr, 200)->header('Content-Type', 'image/png');
    }

    public function downloadQrCode($code)
    {
        $alumni = Alumni::where('code', $code)->firstOrFail();

        QrCode::format('png')->size(300)
            ->merge('/public/image/sc-su-logo-eng.png', .15)
            ->errorCorrection('H')
            ->generate($alumni->code, '../public/qrcodes/'.$alumni->code.'-scsu-reunion.png');

        return response()->download('../public/qrcodes/'.$alumni->code.'-scsu-reunion.png');
    }

    public function isRegister($code)
    {
        $alumni = Alumni::where('code', $code)->first();
        if(sizeof($alumni) == 1){
            return true;
        }else{
            return false;
        }
    }
}
