@extends('template.app')

@push('css')
    {{-- misal mau bikin css tambahan --}}
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>No Hp Pelanggan</th>
                        <th>Email Pelanggan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>No Hp Pelanggan</th>
                        <th>Email Pelanggan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $key)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $key->nama_pelanggan }}</td>
                        <td>{{ $key->alamat_pelanggan }}</td>
                        <td>{{ $key->nohp_pelanggan }}</td>
                        <td>{{ $key->email_pelanggan }}</td>
                        <td>
                            <a href="{{ route('pengelola.pelanggan.edit', $key->id_pelanggan) }}" class="btn btn-success btn-sm">Edit</a>
                            {{-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEdit">Edit</button> --}}
                            <br> 
                              <form action="{{ route('pengelola.pelanggan.destroy', $key->id_pelanggan) }}" method="POST">
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