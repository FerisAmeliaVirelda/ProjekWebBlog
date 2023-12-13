{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
@extends('admin')
@section('content')
    <div class="container bg-primary-subtle mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 ">
                <form action="tampil/search" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="text" placeholder="Place Input key for search data ..." name="search" autofocus value="{{ old('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                {{-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
                <br>
                <div class="card border-0 shadow-sm rounded mb-4 ">
                    <div class="card-body bg-body-tertiary">
                        <a href="{{ route('amelias.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">GAMBAR</th>
                                    <th scope="col">JUDUL</th>
                                    <th scope="col">CONTENT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($amelias as $amelia)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/amelias/' . $amelia->image) }}" class="rounded"
                                                style="width:150px">
                                        </td>
                                        <td>{{ $amelia->title }}</td>
                                        <td>{!! $amelia->content !!}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('amelias.destroy', $amelia->id) }}" method="POST">
                                                <a href="{{ route('amelias.show', $amelia->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('amelias.edit', $amelia->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">Data Post belum Tersedia.</div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $amelias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
