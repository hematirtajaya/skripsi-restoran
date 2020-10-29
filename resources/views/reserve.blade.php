<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Daftar</title>
  </head>
  <body>
  <div class="container">
  <div class="text-center">
   <h3 class="mt-5">Reservasi</h3>
  </div>
  <form>
  <div class="form-row mt-3 justify-content-center align-items-center" >
    <div class="form-group col-md-3">
      <label for="inputEmail4">Nama Depan</label>
      <input type="text" class="form-control" id="inputNamaDepan" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Nama Belakang</label>
      <input type="text" class="form-control" id="inputNamaBelakang" placeholder="">
    </div>
  </div>
  <div class="form-row mt-3 justify-content-center align-items-center" >
  <div class="form-group col-md-6">
    <label for="inputAddress">Nomor Handphone</label>
    <input type="text" class="form-control" id="inputNomorHandphone" placeholder="">
  </div>
  </div>
  <div class="form-row mt-3 justify-content-center align-items-center" >
  <div class="form-group col-md-6 ">
    <label for="inputAddress2">Alamat Email</label>
    <input type="text" class="form-control" id="inputAlamatEmail" placeholder="">
  </div>
  </div>
  <div class="form-row mt-2 justify-content-center align-items-center" >
  <div class="form-group col-md-4">
    <label for="example-date-input">Tanggal Reservasi</label>
        <input class="form-control " type="date" value="2020-08-19" id="example-date-input">
  </div>
  <div class="form-group col-md-2">
    <label for="exampleFormControlSelect2">Jumlah Orang</label>
    <select class="form-control " id="inputJumlahPemesan">
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
  </div>
  </div>
  <div class="text-center">
  
  </div>
  <div class="form-row mt-2 mb-2 ml-1 justify-content-center align-items-center" >
  <a>Jenis Ruangan:</a>
  <div class="form-check form-check-inline ml-3">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Non-Smoking</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Smoking</label>
</div>
</div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary mt-4" style="width:50%;background-color:orange;">Submit</button>
  </div>
</form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>