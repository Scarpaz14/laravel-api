@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crea un nuovo tags</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.tags.store')}}" method="POST">
                    @csrf
                    <a href="{{route('admin.tags.index')}}" class="btn btn-primary mb-3">Torna a tutti i tags</a>
                    <div class="form-group">
                        <label for="title">Nome Tag:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection