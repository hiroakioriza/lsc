<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;
use Hash;
use Session;
use File;
use Carbon\Carbon;
use App\Models\Servisan;
use App\Models\User;
use App\Models\Biosfile;

class ServisanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('succes','Signed in');
        }
  
        return redirect("login-admin")->with('succes','Email / Password Salah !');
    }

    // public function dashboard()
    // {
    //     $servs = Servisan::select('id', 'created_at')
    //     ->get()
    //     ->groupBy(function($date) {
    //         //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
    //         return Carbon::parse($date->created_at)->format('m'); // grouping by months
    //     });

    //     $servmcount = [];
    //     $servArr = [];

    //     foreach ($servs as $key => $value) {
    //         $servmcount[(int)$key] = count($value);
    //     }

    //     for($i = 0; $i < 12; $i++){
    //         if(!empty($servmcount[$i])){
    //             $servArr[$i] = $servmcount[$i];    
    //         }else{
    //             $servArr[$i] = 0;    
    //         }
    //     }

    //     return view('beta-test', compact('servArr'));
    // }

    public function dashboard()
    {
        if(Auth::check()){
            $servs = Servisan::latest()->paginate(5);

            # Data nganggo statistik
            $servsall = Servisan::select('id', 'created_at')
                ->get()
                ->groupBy(function($date) {
                    //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                    return Carbon::parse($date->created_at)->format('m'); // grouping by months
                });
    
            # Data initial
            $servmcount = [];
            $serArr = [];
    
            # Ngeloop
            foreach ($servsall as $key => $value) {
                $servmcount[(int)$key] = count($value);
            }
    
            # Statistik bulanan
            for($i = 1; $i <= 12; $i++){
                if(!empty($servmcount[$i])){
                    $serArr[$i] = $servmcount[$i];    
                }else{
                    $serArr[$i] = 0;    
                }
            }

            return view ('servs.index', [
                'serArr' => array_values($serArr),
                'servs' => $servs,
                'berhasil' => Servisan::where('Status','Berhasil')->count(),
                'cancel' => Servisan::where('Status','Cancel')->count(),
                'menunggu_antrian' => Servisan::where('Status','Menunggu Antrian')->count(),
                'barang_masuk' => Servisan::where('Status','Barang Masuk')->count(),
                'on_process' => Servisan::where('Status','On Process')->count(),
                'gagal' => Servisan::where('Status','Gagal')->count(),
                'komplenan' => Servisan::where('Status','Komplenan')->count(),
            ]);
        }
  
        return redirect("login-admin")->with('succes','You are not allowed to access');
    }

    public function dashboardrekap()
    {
        if(Auth::check()){
            $servs = Servisan::latest()->paginate(5);
            return view ('servs.report',compact('servs'))->with('i', (request()->input('page', 1) -1) * 6);
        }
  
        return redirect("login-admin")->with('succes','You are not allowed to access');
    }

    public function rekapdata()
    {
        if (isset($_GET['start_date'] , $_GET['end_date'])) {

            $from = $_GET['start_date'];
            $to = $_GET['end_date'];
            $servs = DB::table('servisans')
                    ->whereBetween('created_at',[$from,$to])
                    ->get();

        } else {
            $servs = DB::table('servisans')->latest()->get();
        }

        $sum_servs = collect($servs)->sum('EstHarga');
        
        return view('servs.pdfexp', compact('servs', 'sum_servs'));
        // $pdf = PDF::loadView('licencie_structure.show', compact('licencie'));
        // return $pdf->download('invoice.pdf');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login-admin');
    }

    
    /* Registration Admin */

    public function registrationadmin()
    {
        if(Auth::check()){
            return view('auth.registration');
        }

        return redirect("login-admin")->with('succes','You are not allowed to access');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->createusr($data);
         
        return redirect("login-admin")->with('succes','You have Registered');
    }

    public function createusr(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }   
    
     /* Registration User */

     public function registrationusr()
     {
         if(Auth::check()){
             return view('auth.registration');
         }
 
         return redirect("login-admin")->with('succes','You are not allowed to access');
     }
 
     public function customRegistrationusr(Request $request)
     {  
         $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'password' => 'required|min:6',
         ]);
            
         $data = $request->all();
         $check = $this->createusr($data);
          
         return redirect("login-admin")->with('succes','You have Registered');
     }
 
     public function createusrs(array $data)
     {
       return User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => Hash::make($data['password'])
       ]);
     }   
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('servs.create');
        }
        return redirect("login-admin")->with('succes','You are not allowed to access');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'KodeServis' => 'required',
            'NamaBarang' => 'required',
            'Kategori' => 'required',
            'Kondisi' => 'required',
            'Status' => 'required',
            'Notes' => 'required',
            'EstHarga' => 'required',
        ]);
        Servisan::create($request->all());

        return redirect()->intended('dashboard')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($KodeService)
    {
        $serv = Servisan::where('KodeServis', $KodeService)->first();
        return view('servs.show', compact('serv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servisan $serv)
    {
        if(Auth::check()){
            return view('servs.edit', compact('serv'));
        }

        return redirect("login-admin")->with('succes','You are not allowed to access');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servisan $serv)
    {
        $request->validate([
            'KodeServis' => 'required',
            'NamaBarang' => 'required',
            'Kategori' => 'required',
            'Kondisi' => 'required',
            'Status' => 'required',
            'Notes' => 'required',
            'EstHarga' => 'required',
        ]);

        $serv->update($request->all());

        return redirect()->intended('dashboard')->with('succes','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
            $servs = Servisan::find($id);
            $servs->delete();

            return redirect()->intended('dashboard')->with('succes','Data Berhasil di Hapus');
        }

        return redirect("login-admin")->with('succes','You are not allowed to access');

    }

    public function search(Request $request)
    {
        if(isset($_GET['query'])){

            $servsall = Servisan::select('id', 'created_at')
            ->get()
            ->groupBy(function($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
    
            $servmcount = [];
            $serArr = [];
    
            foreach ($servsall as $key => $value) {
                $servmcount[(int)$key] = count($value);
            }
    
            for($i = 1; $i <= 12; $i++){
                if(!empty($servmcount[$i])){
                    $serArr[$i] = $servmcount[$i];    
                }else{
                    $serArr[$i] = 0;    
                }
            }

            $search_text = $_GET['query'];
            $servs = DB::table('servisans')->where('KodeServis','LIKE','%'.$search_text.'%')
            ->orWhere('NamaBarang','LIKE','%'.$search_text.'%')
            ->orWhere('Status','LIKE','%'.$search_text.'%')
            ->orderBy('id')
            ->paginate();
            return view ('servs.index', [
                'serArr' => array_values($serArr),
                'servs' => $servs,
                'berhasil' => Servisan::where('Status','Berhasil')->count(),
                'cancel' => Servisan::where('Status','Cancel')->count(),
                'menunggu_antrian' => Servisan::where('Status','Menunggu Antrian')->count(),
                'barang_masuk' => Servisan::where('Status','Barang Masuk')->count(),
                'on_process' => Servisan::where('Status','On Process')->count(),
                'gagal' => Servisan::where('Status','Gagal')->count(),
                'komplenan' => Servisan::where('Status','Komplenan')->count(),
            ]);


        }else{
            return view('servs.index')->with('succes','Data Tidak Ditemukan');
        }
    }

    public function searchout(Request $request)
    {
        if(isset($_GET['kd'])){

            $search_text = $_GET['kd'];
            $servs = DB::table('servisans')->where('KodeServis',$search_text)->paginate(1);
            return view('customer',['servs'=>$servs]);

        }else{
            return view('customer');
        }
    }

    public function filterdate(Request $request)
    {
        if (isset($_GET['start_date'] , $_GET['end_date'])) {

            $from = $_GET['start_date'];
            $to = $_GET['end_date'];
            $servs = DB::table('servisans')
                    ->whereBetween('created_at',[$from,$to])
                    ->paginate();

        } else {
            $servs = DB::table('servisans')->latest()->get();
        }
        
        return view('servs.report', compact('servs'));
    }


    /* Bios Section Files */

    public function dashbios()
    {
        if(Auth::check()){
            $servs = Biosfile::latest()->paginate(5);
            return view ('servs.biosdl', [
                'servs' => $servs,
                'asus' => Biosfile::where('kategoribios','Berhasil')->count(),
                'acer' => Biosfile::where('kategoribios','Cancel')->count(),
                'axioo' => Biosfile::where('kategoribios','Cancel')->count(),
                'dell' => Biosfile::where('kategoribios','Menunggu Antrian')->count(),
                'lenovo' => Biosfile::where('kategoribios','Barang Masuk')->count(),
                'samsung' => Biosfile::where('kategoribios','On Process')->count(),
                'sony' => Biosfile::where('kategoribios','Gagal')->count(),
                'toshiba' => Biosfile::where('kategoribios','Komplenan')->count(),
            ]);
        }
  
        return redirect("login-admin")->with('succes','You are not allowed to access');
    }

    public function biosup(Request $request)
    {
        $this->validate($request, [
            'namabios' => 'required',
            'kategoribios' => 'required',
            'keteranganbios' => 'required',
			'filebios' => 'required|file|mimes:bin',
		]);

        $filebios = $request->file('filebios');
        $nama_file = time()."_".$filebios->getClientOriginalName();

        $tujuan_upload = storage_path('data_filebios');
		$filebios->move($tujuan_upload,$nama_file);

        Biosfile::create(
            [
                'namabios' => $request->namabios,
                'kategoribios' => $request->kategoribios,
                'keteranganbios' => $request->keteranganbios,
                'filebios' => $nama_file,    
            ]
        );

        return redirect('dashboard/filebios')->with('succes','Data Berhasil di Input');
    }

    public function createbios()
    {
        if(Auth::check()){
            return view('servs.createbios');
        }
        return redirect("login-admin")->with('succes','You are not allowed to access');

    }

    public function destroybios($id)
    {
        if(Auth::check()){
            $servs = Biosfile::where('id',$id)->first();
            $pathFile = storage_path('data_filebios/' . $servs->filebios);
            $paths = File::delete($pathFile);

            Biosfile::where('id',$id)->delete();

            return redirect('dashboard/filebios')->with('succes','Data Berhasil di Hapus');
        }

        return redirect("login-admin")->with('succes','You are not allowed to access');

    }

    public function downloadbios($downbios)
    {
        $biosdown = Biosfile::where('id', $downbios)->firstOrFail();
        $pathToFile = storage_path('data_filebios/' . $biosdown->filebios);
        return response()->download($pathToFile);
    }
}
