@extends('tamplate')

@section('hasil')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hasil Inputan</h4>
        <p class="card-description">
          Add class <code>.table-bordered</code>
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  ID
                </th>
                <th>
                  Kode Barang
                </th>
                <th>
                  Nama Barang
                </th>
                <th>
                  Jenis Varian
                </th>
                <th>
                  Quality
                </th>
                <th>
                  Harga Jual
                </th>
                <th>
                  Harga Pembelian
                </th>
                <th>
                  Diskon
                </th>
                <th>
                  Jumlah Pembelian
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($form as $key)
                <tr>
                  <td>{{ $key -> id}}</td>
                  <td>{{ $key -> kb}}</td>
                  <td>{{ $key -> nama}}</td>
                  <td>{{ $key -> jv}}</td>
                  <td>{{ $key -> qty}}</td>
                  <td>{{ $key -> hj}}</td>
                  <td>{{ $key -> HargaPembelian}}</td>
                  <td>{{ $key -> Diskon}}</td>
                  <td>{{ $key -> JumlahPembayaran}}</td>
                  <td><button type="button" onclick="window.location.href='{{url('edit/'.$key->id)}}';" class="btn btn-warning">Edit</button><br> <br>
                    <button type="button" onclick="window.location.href='{{url('delete/'.$key->id)}}';" class="btn btn-secondary">Hapus</button></td>
                </tr>  
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
