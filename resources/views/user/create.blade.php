@extends('layouts.app')

{{-- Customize layout sections --}}
@section('title', 'Form User')
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat User baru</h3>
            </div>

            <form method="POST" action="{{ route('user.store') }}">
                {{ csrf_field() }}

                <div class="card-body">
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" name="level_id" id="level_id">
                            <option value="" disabled selected>Select your option</option>
                            @foreach ($level as $lvl)
                                <option value="{{ $lvl->level_id }}">{{ $lvl->level_nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter Username">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="Password"
                            placeholder="Enter Password">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
