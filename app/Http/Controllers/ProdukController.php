<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    function show(){
        $data['produk'] = Produk::all();
        return view('produk',$data);
    }

    function view(){
        $data['produk'] = Produk::all();
        return view('tampilan1',$data);
    }

    function cart($id){
        $data['produk'] = Produk::find($id);
        $data['action'] = url('produk/view').'/'.$data['produk']->id;
        return view('tampilancart', $data);
    }

    function add(){
        $data=[
            'action'=>url('produk/create'),
            'tombol'=>'simpan',
            'produk'=>(object)[
                'kdproduk'=>'',
                'nmproduk'=>'',
                'deskripsi'=>'',
                'ukproduk'=>'',
                'warnaproduk'=>'',
                'hargaproduk'=>'',
                'foto'=>'',
              
            ],
        ];
        return view('formproduk',$data);
    }
        
    function create(Request $que){
        Produk::create([
            'kdproduk' => $que->kdproduk,
            'nmproduk' => $que->nmproduk,
            'deskripsi' => $que->deskripsi,
            'ukproduk' => $que->ukproduk,
            'warnaproduk' => $que->warnaproduk,
            'hargaproduk' => $que->hargaproduk,
            'foto' => $que->file('foto')->store('foto'),
           
        ]);
        return redirect('produk');
    }

    function hapus($item){
        $produk = Produk::where('kdproduk', $item)->first();
        $produk->delete();
        Storage::delete($produk->foto);
        return redirect('produk');
    }

    function edit($item){
        $data['produk']=Produk::find($item);
        $data['action']= url('produk/update').'/'.$data['produk']->id;
        $data['tombol']='Update';
        return view('formproduk',$data);
    }

    function update(Request $que){

        if($que->file('foto')){
            $produk = Produk::where('id',$que->id)->first();
            Storage::delete($produk->foto);

            $file = $que->file('foto')->store('foto');
        }else{
            $file = DB::raw('foto');
        }
        Produk::where('id',$que->id)->update([
          
            'kdproduk'=>$que->kdproduk,
            'nmproduk'=>$que->nmproduk,
            'deskripsi'=>$que->deskripsi,
            'ukproduk'=>$que->ukproduk,
            'warnaproduk'=>$que->warnaproduk,
            'hargaproduk'=>$que->hargaproduk,
            'foto'=>$file
        ]);
        return redirect('produk');
    }
}
