@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="card notification bg-primary text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">{{Session::get('success')}}</div>
                        <div class="col-md-1 text-right"><a class="text-white" onclick="closeNotification()" href="">X</a></div>
                    </div>
                </div>
            </div>
            <br>
        @endif


        @if (sizeof($messages) > 0)
            <table class="table-striped table">
                <thead class="bg-primary text-white">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Telp.</th>
                    <th>E-Mail</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($messages as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->pesan }}</td>
                            <td><button msg-id="{{$item->id }}" msg-name="{{ $item->nama }}" onclick="openModalDelete(this)" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center">
                <h2>Belum ada pesan</h2>
            </div>
        @endif
    </div>

    <div class="modal confirm-delete" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-violet text-white">
              <h5 class="modal-title">Hapus</h5>
              <button type="button" class="close" onclick="closeModalDelete()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="delete-message-message">Modal body text goes here.</p>
            </div>
            <div class="modal-footer confirm-delete-footer">
            </div>
          </div>
        </div>
      </div>
@endsection
