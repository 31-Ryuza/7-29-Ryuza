@extends('layouts.app')
@section('title', 'Ryuza || Data Contact Us')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Edit Data Contact Us</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <form action="{{ route('contact.update', $contact->id) }}" method="post" novalidate="novalidate">
                                            {{ csrf_field(  ) }}
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama</label>
                                                <input name="nama" type="text" class="form-control" value="{{ $contact->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Email</label>
                                                <input name="email" type="email" class="form-control" value="{{ $contact->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Pesan</label>
                                                <textarea name="pesan" type="text" class="form-control" >{{ $contact->pesan }}</textarea>
                                            </div>

                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                    <i class="fa fa-save fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection