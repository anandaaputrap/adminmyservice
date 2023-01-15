@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pembayaran</h1>
</div>

<form action="{{ route('pengelola.bayar.update', $bayar->id_pembayaran) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="email_teknisi">Email Teknisi</label>
        <input type="text" class="form-control" id="email_teknisi" name="email_teknisi" readonly value="{{ $bayar->email_teknisi }}">
    </div>
    <div class="form-group">
        <label for="keahlian_teknisi">Keahlian Teknisi</label>
        <input type="text" class="form-control" id="keahlian_teknisi" name="keahlian_teknisi" readonly value="{{ $bayar->keahlian_teknisi }}">
    </div>
    <div class="form-group">
        <label for="tgl_booking">Tanggal Booking</label>
        <input type="text" class="form-control" id="tgl_booking" name="tgl_booking" readonly value="{{ $bayar->tgl_booking }}">
    </div>
    <div class="form-group">
        <label for="total_bayar">Total</label>
        <input type="text" class="form-control" id="total_bayar" name="total_bayar" readonly value="{{ $bayar->total_bayar }}">
    </div>
    <div class="form-group">
        <label for="bukti_byr">Bukti Bayar</label>
        <input type="text" class="form-control" id="bukti_byr" name="bukti_byr" readonly value="{{ $bayar->bukti_byr }}">
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Terkonfirmasi" @if($bayar->status == "Terkonfirmasi") selected @endif>Terkonfirmasi</option>
            <option value="Belum Terkonfirmasi" @if($bayar->status == "Belum Terkonfirmasi") selected @endif>Belum Terkonfirmasi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="id_pelanggan">ID Pelanggan</label>
        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" readonly value="{{ $bayar->id_pelanggan }}">
    </div>
    <button type="submit" class="btn btn-primary" id="btn=save">Simpan</button>
</form>






@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush