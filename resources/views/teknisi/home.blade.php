@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Teknisi</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Teknisi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Teknisi</th>
                        <th>Email Teknisi</th>
                        <th>No Hp Teknisi</th>
                        <th>Alamat Teknisi</th>
                        <th>Norek Teknisi</th>
                        <th>Foto Teknisi</th>
                        <th>Keahlian Teknisi</th>
                        <th>Tarif Teknisi</th>
                        <th>Status Teknisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Teknisi</th>
                        <th>Email Teknisi</th>
                        <th>No Hp Teknisi</th>
                        <th>Alamat Teknisi</th>
                        <th>Norek Teknisi</th>
                        <th>Foto Teknisi</th>
                        <th>Keahlian Teknisi</th>
                        <th>Tarif Teknisi</th>
                        <th>Status Teknisi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $key)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $key->nama_teknisi }}</td>
                        <td>{{ $key->email_teknisi }}</td>
                        <td>{{ $key->nohp_teknisi }}</td>
                        <td>{{ $key->alamat_teknisi }}</td>
                        <td>{{ $key->norek_teknisi }}</td>
                        <td>{{ $key->foto }}</td>
                        <td>{{ $key->keahlian_teknisi }}</td>
                        <td>{{ $key->tarif_teknisi }}</td>
                        <td>{{ $key->status_teknisi }}</td>
                        {{-- <td><img src="{{ asset('storage/'.$key->foto_teknisi) }}" alt="" width="100px"></td> --}}
                        <td>
                            <a href="{{ route('pengelola.teknisi.edit', $key->id_teknisi) }}" class="btn btn-success btn-sm">Edit</a>
                            {{-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit">Edit</button> --}}
                            <br> 
                              <form action="{{ route('pengelola.teknisi.destroy', $key->id_teknisi) }}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger btn-sm">Hapus</button>
                              </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@push('js')
    {{-- misal mau bikin js tambahan --}}
@endpush