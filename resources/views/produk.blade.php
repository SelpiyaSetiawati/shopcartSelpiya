@extends('admin')

@section('konten')
    
<br>


<style>
    body{
        background-color: darkgray;
    }
  </style>

      <main>
          <div class="container mt-5">
              <h2 class="text-center pt-3">Data Produk</h2>
              <a href="produk/add"><button class="btn btn-primary">Tambah Data</button></a>
              <table class="table table-bordered text-center mt-2">
                  <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">KODE PRODUK</th>
                        <th scope="col">NAMA PRODUK</th>
                        <th scope="col">DESKRIPSI</th>
                        <th scope="col">UKURAN</th>
                        <th scope="col">WARNA</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">STOK</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                    @foreach ($produk as $key => $item)
                <tbody>
                    <tr>
                        <td scope="row">{{ $key+1}}</td>
                        <td>{{ $item -> kdproduk}}</td>
                        <td>{{ $item -> nmproduk}}</td>
                        <td>{{ $item -> deskripsi}}</td>
                        <td>{{ $item -> ukproduk}}</td>
                        <td>{{ $item -> warnaproduk}}</td>
                        <td>{{ $item -> hargaproduk}}</td>
                        <td><img src="/storage/{{ $item->foto }}" alt="" width="100" height="100"></td>
                        <td>{{ $item -> stok}}</td>
                        <td>
                        <a href="produk/edit/{{$item -> id}}"><button class="btn btn-primary" name="submit" type="submit">EDIT</button></a>
                        <a href="produk/delete/{{$item -> kdproduk}}"><button class="btn btn-danger" name="submit" type="submit">HAPUS</button></a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
          </div>
      </main>
          
@endsection