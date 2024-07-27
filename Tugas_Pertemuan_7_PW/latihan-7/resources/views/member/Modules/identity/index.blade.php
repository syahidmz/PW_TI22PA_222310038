@extends('member.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold">
                    List of Users
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tgl Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $member)
                                    <tr>
                                        <th>{{ $loop->index + 1 }}</th>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->address }}</td>
                                        <td>{{ $member->birthdate }}</td>
                                        <td>{{ $member->gender }}</td>
                                        <td>{{ $member->phone }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/details/{{ $member->id }}">
                                                    <button type="button" class="btn btn-primary btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                </a>
                                                <a href="/update/{{ $member->id }}">
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </a>
                                                <a href="/delete/{{ $member->id }}">
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                {{ $data->links() }}
            </div>
        </div>
        <div class="col-lg-4">
            @include('member.modules.identity.create')
        </div>
    </div>
@endsection
