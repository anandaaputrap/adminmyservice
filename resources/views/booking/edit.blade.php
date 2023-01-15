@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Booking</h1>
</div>

<form action="{{ route('pengelola.booking.update', $booking->id_booking) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="tgl_booking">Tanggal Booking</label>
        <input type="text" class="form-control" id="tgl_booking" name="tgl_booking" readonly value="{{ $booking->tgl_booking }}">
    </div>
    <div class="form-group">
        <label for="email_teknisi">Email Teknisi</label>
        <input type="text" class="form-control" id="email_teknisi" name="email_teknisi" readonly value="{{ $booking->email_teknisi }}">
    </div>
    <div class="form-group">
        <label for="keahlian_teknisi">Keahlian Teknisi</label>
        <input type="text" class="form-control" id="keahlian_teknisi" name="keahlian_teknisi" readonly value="{{ $booking->keahlian_teknisi }}">
    </div>
    <div class="form-group">
        <label for="id_pelanggan">ID Pelanggan</label>
        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" readonly value="{{ $booking->id_pelanggan }}">
    </div>
    <div class="form-group">
        <label for="status_booking">Status Booking</label>
        <select name="status_booking" id="status_booking" class="form-control" required>
            <option selected>-- Pilih --</option>
            <option value="Terkonfirmasi" @if($booking->status_booking == "Terkonfirmasi") selected @endif>Terkonfirmasi</option>
            <option value="Belum Terkonfirmasi" @if($booking->status_booking == "Belum Terkonfirmasi") selected @endif>Belum Terkonfirmasi</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>

@endsection

@push('js')
        {{-- misal mau bikin javascript tambahan --}}
@endpush