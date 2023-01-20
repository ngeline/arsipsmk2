@extends ('layouts.app')

@section ('content')
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header"><strong>Tambah Surat Masuk</strong><span class="small ms-1"></span></div>
                <div class="card-body">
                  <div class="example">
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-267">
                        <form class="row g-3">
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">Dari</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="Masukkan Nama Pengirim">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">Alamat</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="Masukkan Keterangan Alamat">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">Nomor Surat</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="Masukkan Nomor Surat">
                          </div>
                          <div class="col-4">
                            <label class="form-label" for="inputAddress">Tanggal Surat</label>
                            <input class="form-control" id="inputAddress" type="date">
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Dokumen</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                          <div class="col-12">
                            <label class="form-label" for="inputAddress">Perihal Surat</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="Masukkan Perihal Surat">
                          </div>
                          <div class="col-5">
                            <label class="form-label" for="inputAddress">Tanggal Masuk</label>
                            <input class="form-control" id="inputAddress" type="date" >
                          </div>
                          <div class="col-7">
                            <label class="form-label" for="inputAddress">Kode Simpan</label>
                            <input class="form-control" id="inputAddress" type="text" placeholder="Masukkan Kode Simpan">
                          </div>
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Masukkan Keterangan Surat</label>
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" id="gridCheck" type="checkbox">
                              <label class="form-check-label" for="gridCheck">Check me out</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection