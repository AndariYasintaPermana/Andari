@extends('tamplate')

@section('form')

<div class="isi">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">EDIT BARANG</h4>
                <p class="card-description">
                  UTS Framework Pemrograman Web
                </p>
                <form class="forms-sample" method="POST" action="{{url('update'). '/' . $form[0]->id}}">
                    @csrf
                <div class="form-group">
                      <label for="kb">ID</label>
                      <input name="kb" value="{{$form[0]->id}}" type="text" class="form-control" id="kb" placeholder="kode barang">
                </div>
                <div class="form-group">
                        <label for="kb">Kode Barang</label>
                        <input name="kb" value="{{$form[0]->kb}}" type="text" class="form-control" id="kb" placeholder="kode barang">
                </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input name="nama" value="{{$form[0]->nama}}" type="text" class="form-control" id="nama" placeholder="nama barang">
                  </div>
                  <div class="form-group">
                    <label for="jv">Jenis Varian</label>
                    <input name="jv" value="{{$form[0]->jv}}" type="text" class="form-control" id="jv" placeholder="jenis varian">
                  </div>
                  <div class="form-group">
                    <label for="qty">Quality</label>
                    <input name="qty" value="{{$form[0]->qty}}" type="number" class="form-control" id="qty" placeholder="quality">
                  </div>
                  <div class="form-group">
                    <label for="hj">Harga Jual</label>
                    <input name="hj" value="{{$form[0]->hj}}" type="number" class="form-control" id="hj" placeholder="harga jual">
                  </div>
                  <div class="form-group">
                    <label for="HargaPembelian">Harga Pembelian</label>
                    <input name="nilai_total" value="{{$form[0]->HargaPembelian}}" type="number" class="form-control" id="HargaPembelian" placeholder="harga pembelian">
                  </div>
                  <div class="form-group">
                    <label for="Diskon">Diskon</label>
                    <input name="diskon" value="{{$form[0]->Diskon}}" type="number" class="form-control" id="Diskon" placeholder="diskon">
                  </div>
                  <div class="form-group">
                    <label for="JumlahPembayaran">Jumlah Pembayaran</label>
                    <input name="jumlah" value="{{$form[0]->JumlahPembayaran}}" type="number" class="form-control" id="JumlahPembayaran" placeholder="jumlah pembayaran">
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Proses</button>
                  <button class="btn btn-light">Cancel</button>
                </div>
              </div>
            </div>
          </div>
<br>
@endsection
