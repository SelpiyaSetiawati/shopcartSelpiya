<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('admin')}}\css\bootstrap.min.css">
</head>
<body>

     <style>
          body{
              background-color: rgb(235, 235, 235);
          }
      </style>
      
     <div class="container mt-3">
          <div class="card ">
          <div class="card-header text-center">
               <h2>Daftar</h2>
          </div>
               <div class="card-body">
             <form action="{{$action}}" method="post" enctype="multipart/form-data">
             @csrf
                <div class="mb-3">
                     <label for="" class="form-label">Kode Produk</label>
                     <input type="text" name="kdproduk" class="form-control" id="" value="{{ $produk -> kdproduk}}" >
                </div>
                <div class="mb-3">
                     <label for="" class="form-label">Nama Produk</label>
                     <input type="text" name="nmproduk" class="form-control" id="" value="{{ $produk -> nmproduk}}" >
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="" value="{{ $produk -> deskripsi}}" >
               </div>
                <div class="mb-3">
                    <label for="" class="form-label">Ukuran</label>
                    <input type="text" name="ukproduk" class="form-control" id="" value="{{ $produk -> ukproduk}}" >
               </div>
               <div class="mb-3">
                <label for="" class="form-label">Warna</label>
                <input type="text" name="warnaproduk" class="form-control" id="" value="{{ $produk -> warnaproduk}}" >
           </div>
           <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" name="hargaproduk" class="form-control" id="" value="{{ $produk -> hargaproduk}}" >
            </div>
                <div class="mb-3">
                     <label for="" class="form-label">Foto</label>
                         @if(file_exists("storage/".$produk->foto))
                         <img src="/storage/{{ $produk->foto }}" alt="" width="100" height="100"><br>
                         @endif
                     <input type="file" name="foto" id="foto">
                </div>
             
               <div>
                    <input type="submit" value="{{$tombol}}" name="simpan">
               </div>
          </form>
     </div>
     </div>
     </div>
    </body>
</html>