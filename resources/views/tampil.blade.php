@extends('layouts.app')
@section('content')
    <div class="container bg-primary-subtle mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 ">
                <div>
                    <h3 class="text-center my-4">HALAMAN USER</h3>
                    <hr>
                </div>
                <form action="tampil/search" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="text" placeholder="Place Input key for search data ..." name="search" autofocus value="{{ old('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <br>
                <div class="card border-0 shadow-sm rounded mb-4 ">
                    <div class="card-body bg-body-tertiary">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($amelias as $amelia)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('/storage/amelias/' .$amelia->image) }}" class="rounded" style="width:150px">                                    
                                    </td>
                                    <td>{{ $amelia->title }}</td>
                                    <td>{!! $amelia->content !!}</td>
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
    