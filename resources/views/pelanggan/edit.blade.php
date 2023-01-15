@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pelanggan</h1>
</div>

<form action="{{ route('pengelola.pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" readonly value="{{ $pelanggan->nama_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="alamat_pelanggan">Alamat Pelanggan</label>
        <input type="text" class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" readonly value="{{ $pelanggan->alamat_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="telepon_pelanggan">No Hp Pelanggan</label>
        <input type="text" class="form-control" id="nohp_pelanggan" name="nohp_pelanggan" readonly value="{{ $pelanggan->nohp_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="username_pelanggan">Email Pelanggan</label>
        <input type="text" class="form-control" id="email_pelanggan" name="email_pelanggan" readonly value="{{ $pelanggan->email_pelanggan }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>

@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush