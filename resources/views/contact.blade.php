@extends('layout.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form>
  <div class="mb-3">
    <input type="text" class="form-control" id="inputnama" placeholder="Nama">
  </div>
  <div class=" mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="Email">
  </div>
  <div class="mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="textarea" style="height: 100px"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Kirim</button>
</form>
@endsection