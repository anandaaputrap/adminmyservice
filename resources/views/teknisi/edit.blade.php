@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Teknisi</h1>
</div>

<form action="{{ route('pengelola.teknisi.update', $teknisi->id_teknisi) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama_teknisi">Nama Teknisi</label>
        <input type="text" class="form-control" id="nama_teknisi" name="nama_teknisi" readonly value="{{ $teknisi->nama_teknisi }}">
    </div>
    <div class="form-group">
        <label for="email_teknisi">Email Teknisi</label>
        <input type="text" class="form-control" id="email_teknisi" name="email_teknisi" readonly value="{{ $teknisi->email_teknisi }}">
    </div>
    <div class="form-group">
        <label for="nohp_teknisi">No Hp Teknisi</label>
        <input type="text" class="form-control" id="nohp_teknisi" name="nohp_teknisi" readonly value="{{ $teknisi->nohp_teknisi }}">
    </div>
    <div class="form-group">
        <label for="alamat_teknisi">Alamat Teknisi</label>
        <input type="text" class="form-control" id="alamat_teknisi" name="alamat_teknisi" readonly value="{{ $teknisi->alamat_teknisi }}">
    </div>
    <div class="form-group">
        <label for="norek_teknisi">Norek Teknisi</label>
        <input type="text" class="form-control" id="norek_teknisi" name="norek_teknisi" readonly value="{{ $teknisi->norek_teknisi }}">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" readonly value="{{ $teknisi->foto }}">
    </div>
    <div class="form-group">
        <label for="keahlian_teknisi">Keahlian Teknisi</label>
        <input type="text" class="form-control" id="keahlian_teknisi" name="keahlian_teknisi" readonly value="{{ $teknisi->keahlian_teknisi }}">
    </div>
    <div class="form-group">
        <label for="tarif_teknisi">Tarif Teknisi</label>
        <input type="text" class="form-control" id="tarif_teknisi" name="tarif_teknisi" readonly value="{{ $teknisi->tarif_teknisi }}">
    </div>
    <div class="form-group">
        <label for="status_teknisi">Status</label>
        <select name="status_teknisi" id="status_teknisi" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Aktif" @if($teknisi->status_teknisi == "Aktif") selected @endif>Aktif</option>
            <option value="Nonaktif" @if($teknisi->status_teknisi == "Nonaktif") selected @endif>Nonaktif</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
</form>




@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush