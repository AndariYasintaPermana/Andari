@extends('tamplate')

@section('form')
<div class="isi">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">INPUT BARANG</h4>
                <p class="card-description">
                  UTS Framework Pemrograman Web
                </p>
                <form class="forms-sample" method="POST" action="/inputan">
                    @csrf
                <div class="form-group">
                        <label for="kb">Kode Barang</label>
                        <input name="kb" type="text" class="form-control" id="kb" placeholder="kode barang">
                </div>
                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input name="nama" type="text" class="form-control" id="nama" placeholder="nama barang">
                  </div>
                  <div class="form-group">
                    <label for="jv">Jenis Varian</label>
                    <input name="jv" type="text" class="form-control" id="jv" placeholder="jenis varian">
                  </div>
                  <div class="form-group">
                    <label for="qty">Quality</label>
                    <input name="qty" type="number" class="form-control" id="qty" placeholder="quality">
                  </div>
                  <div class="form-group">
                    <label for="hj">Harga Jual</label>
                    <input name="hj" type="number" class="form-control" id="hj" placeholder="harga jual">
                  </div>
                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Remember me
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Proses</button>
                  <button class="btn btn-light">Cancel</button>
                </>
              </div>
            </div>
          </div>
<br>
@endsection
