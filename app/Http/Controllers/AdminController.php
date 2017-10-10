<?php

namespace App\Http\Controllers;

use App\Alumni;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public $keyword = [
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'major' => 'สาขาวิชา',
    ];

    public function dashboard()
    {
        $all_alumni = Alumni::count();
        $attend = Alumni::where('is_attend', true)->count();
        $not_attend = $all_alumni - $attend;

        return view('admin.dashboard', [
            'all' => $all_alumni,
            'attend' => $attend,
            'not_attend' => $not_attend
        ]);
    }

    public function register()
    {
        return view('admin.register');
    }

    public function registerWithCode(Request $request)
    {
        $code = $request->get('code');
        $alumni = Alumni::where('code', $code)->first();

        if (sizeof($alumni) == 1) {
            $alumni->is_attend = true;
            $alumni->save();
            return redirect()->back()->with(['status' => $code.' ลงทะเบียนสำเร็จ']);
        }else{
            return redirect()->back()->withErrors(['code' => 'ไม่พบข้อมูลในระบบ']);
        }
    }

    public function search()
    {
        return view('admin.search', ['keyword' => $this->keyword]);
    }

    public function searcher(Request $request)
    {
        $key = $request->get('keyword');
        $query = $request->get('query');

        $alumni = Alumni::where($key, 'LIKE', '%'. $query . '%')->get();

        return view('admin.search', [
            'alumni' => $alumni,
            'keyword' => $this->keyword
        ]);
    }

    public function alumniList()
    {
        $alumni = Alumni::paginate(20);
        return view('admin.list', ['alumni' => $alumni]);
    }

    public function showAlumni($code)
    {
        $alumnus = Alumni::where('code', $code)->firstOrFail();
        return view('admin.show', ['alumnus' => $alumnus]);
    }

    public function exportAlumni()
    {
        $alumni = Alumni::all([
            'code',
            'sc',
            'first_name',
            'last_name',
            'major',
            'address',
            'email',
            'tel',
            'jobs',
            'position',
            'food',
            'follower',
            'is_gratitude',
            'is_party',
            'is_attend'
        ]);
        $filename = 'รายชื่อศิษย์เก่า-' . Carbon::now();

        Excel::create($filename, function($excel) use ($alumni) {
            $excel->sheet('sheet1', function($sheet) use ($alumni) {
                $sheet->fromArray($alumni);
            });
        })->download('xlsx');
    }
}
