<?php require 'partials/top.php' ?>

    <!-- slider -->
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" style="height: 300px">
          <div class="carousel-item active" style="height: 300px">
            <img src="assets/spicy.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>REKRUTMEN</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portofolio page">
      <div class="container">

        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mx-auto">
            
            <form onsubmit="return submitForm()">

              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required="">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required="">
              </div>

              <div class="form-group">
                <label>No Handphone</label>
                <input type="tel" name="no_handphone" class="form-control" required="">
              </div>

              <div class="form-group">
                <label>E-Mail</label>
                <input type="email" name="email" class="form-control" required="">
              </div>

              <div class="form-group">
                <label>Surat Lamaran Kerja</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="surat" onchange="initFile()" required="">
                  <label class="custom-file-label" for="customFile" id="choosefile">Choose file</label>
                </div>
              </div>

              <button class="btn btn-primary btn-block">Submit</button>
            </form>

          </div>
        </div>
        
        

      </div>
    </div>

    <script type="text/javascript">

    function initFile()
    {
      var surat = document.querySelector('input[name=surat]').files
      var choosefile = document.querySelector('#choosefile')
      if(surat.length)
        choosefile.innerHTML = surat[0].name
      else
        choosefile.innerHTML = 'Choose file'
    }
      
    function submitForm()
    {
      event.preventDefault()

      var nama = document.querySelector('input[name=nama]').value
      var alamat = document.querySelector('input[name=alamat]').value
      var no_handphone = document.querySelector('input[name=no_handphone]').value
      var email = document.querySelector('input[name=email]').value
      var surat = document.querySelector('input[name=surat]').files

      console.log(nama,alamat,no_handphone,email,surat)

      fetch('backend/form.php')
      .then(res => res.text())
      .then(res => {
        alert(res)
      })

    }

    </script>

<?php require 'partials/bottom.php' ?>