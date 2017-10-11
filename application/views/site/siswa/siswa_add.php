<div class="row">
  <ol class="breadcrumb breadcrumb-col-orange">
      <li><a href="<?php echo URL; ?>siswa"><i class="material-icons">person_add</i> SISWA</a></li>
      <li class="active">TAMBAH SISWA</li>
  </ol>
</div>

<div class="row clearfix">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h2>TAMBAH SISWA
          <small>lorem ipsum</small>
        </h2>
      </div>
      <div class="body">
        <div class="demo-masked-input">
          <div class="row clearfix">
            <div class="col-md-4">
              <b>Nomor Induk Siswa</b>
              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="material-icons">assignment_ind</i>
                  </span>
                  <div class="form-line">
                      <input type="number" class="form-control" placeholder="Ex: 11700045">
                  </div>
              </div>
            </div>


          <div class="col-md-4">
              <b>Nama Siswa</b>
              <div class="input-group">
                  <span class="input-group-addon">
                      <i class="material-icons">account_circle</i>
                  </span>
                  <div class="form-line">
                      <input type="text" name="nama_siswa" class="form-control" placeholder="Ex: Ahmad Irfan Maulana" required>
                  </div>
              </div>
          </div>

          <div class="col-md-4">
              <b>Jenis Kelamin</b>
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" class="with-gap" id="ig_radio" name="jenis_kelamin" checked>
                        <label for="ig_radio"></label>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control"  placeholder="Laki - Laki" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" class="with-gap" id="ig_radio2" name="jenis_kelamin">
                        <label for="ig_radio2"></label>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Perempuan" readonly>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-md-12">
            <b>Alamat</b>
            <div class="input-group">
              <div class="form-line">
                  <textarea name="name" rows="8" cols="80" class="form-control" placeholder="Alamat"></textarea>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Tempat Lahir</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">store</i>
              </span>
              <div class="form-line">
                  <input type="text" class="form-control" placeholder="Ex: Subang">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Tanggal Lahir</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">date_range</i>
              </span>
              <div class="form-line">
                  <input type="text" class="form-control date" placeholder="Ex: 03/04/2002">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Nomor Telepon</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
              <div class="form-line">
                  <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +64-8961-xxxx-xx">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <b>Tanggal Masuk</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
              <div class="form-line">
                <input type="text" name="" class="form-control date" value="" placeholder="Ex: 01/09/2017">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <b>Lama PKL</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
              <div class="form-line">
                <input type="number" name="lama_pkl" class="form-control" value="">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Status</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
                <div class="form-line">
                  <select class="form-control show-tick">
                      <option value="">Pilih</option>
                      <option>Siswa</option>
                      <option>Mahasiswa</option>
                  </select>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Asal Sekolah</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
                <div class="form-line">
                  <select class="form-control show-tick" data-live-search="true">
                      <option value="">Pilih</option>
                      <option>Hot Dog, Fries and a Soda</option>
                      <option>Burger, Shake and a Smile</option>
                      <option>Sugar, Spice and all things nice</option>
                  </select>
                </div>
            </div>
          </div>

          <div class="col-md-4">
            <b>Program Keahlian</b>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">stay_primary_portrait</i>
              </span>
                <div class="form-line">
                  <select class="form-control show-tick" data-live-search="true">
                      <option value="">Pilih</option>
                      <option>Hot Dog, Fries and a Soda</option>
                      <option>Burger, Shake and a Smile</option>
                      <option>Sugar, Spice and all things nice</option>
                  </select>
                </div>
            </div>
          </div>

          <div class="col-md-12">
            <button type="button" name="button" class="btn btn-primary">Simpan</button>
          </div>

         </div>
        </div>
      </div>
    </div>
  </div>
</div>
