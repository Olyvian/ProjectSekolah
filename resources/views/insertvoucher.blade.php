<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    <title>GetVoucher | Tambah Voucher</title>
</head>
<body>
    <div id="root"></div>
    <section class="section">
        <div class="row">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Masukkan Tambah Data Dibawah Sini</h5>

                <!-- General Form Elements -->
                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Voucher</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" >
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Voucher</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_voucher" required placeholder="Nama Voucher" value="{{ old('nama_voucher') }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode" required placeholder="Kode" value="{{ old('kode') }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" required placeholder="Deskripsi" value="{{ old('deskripsi') }}">


                      </div>
                    </div>
                    {{-- <div class="row mb-3">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                          <select value="" required id="kategori" name="kategori" class="form-select">
                            <option value="pakaian">Pakaian</option>
                            <option value="pakaian">Pakaian</option>
                      {{-- @foreach ($kategori as $kategoris)
                      <option value="{{ $kategoris->id }}"@if (old('kategori') == $kategoris->id)
                          selected
                      @endif>{{ $kategoris->Kategori }}</option>
                      @endforeach --}}


                      {{-- </select>
                      </div> --}}
                  {{-- </div> --}}

                  <div class="row mb-3">
                    <div class="col-sm-10">
                      <button  type="submit" class="btn btn-primary">Simpan Data</button>
                      <a href="/" type="submit" class="btn btn-danger">Kembali</a>
                    </div>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>




        </div>
      </section>
</body>
                  @if ($errors->has('nama_voucher'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('nama_voucher') }}
                     </div>
                  @endif
                  @if ($errors->has('deskripsi'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('deskripsi') }}
                     </div>
                  @endif
                  @if ($errors->has('kategori'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('kategori') }}
                     </div>
                  @endif
                  @if ($errors->has('kuota'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('kuota') }}
                     </div>
                  @endif
                  @if ($errors->has('gambar'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('gambar') }}
                     </div>
                  @endif
                  @if ($errors->has('kode'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('kode') }}
                     </div>
                  @endif
                  @if ($errors->has('syarat'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('syarat') }}
                     </div>
                  @endif
                  @if ($errors->has('masa_kadaluarsa'))
                  <div class="alert alert-danger" role="alert">
                      <i class="bi bi-x-lg"></i> {{ $errors->first('masa_kadaluarsa') }}
                     </div>
                  @endif
</html>
