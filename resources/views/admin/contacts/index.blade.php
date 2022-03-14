@extends('layouts.app')
@section('title', 'Ryuza || Data Contact Us')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Contact Us</h2>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Pesan</th>
                                                <th>Pengaturan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contacts as $index => $contact)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $contact->nama }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->pesan }}</td>
                                                <td><button type="submit" class="btn btn-success"> <a href="{{ route('contact.edit', $contact->id) }}" style="color: #fff;">Edit</a></button>
                                                <button type="button" class="btn btn-danger"><a href="{{ route('contact.destroy', $contact->id) }}" style="color: #fff;">Hapus</a></button>
                                            
                                            </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection