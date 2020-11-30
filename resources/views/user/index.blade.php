@extends('templates.master')

@section('content')
    <div class="content-wrapper">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item active" aria-current="page">Data User</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Form User</h6>
                        <p id="ket-form" class="card-description">Form Tambah Data User</p>
                        <hr />

                        <form method="post" action="{{url('dashboard/register/save')}}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control {{ $errors->has('username') ? 'has-error':'' }}" id="username" name="username" placeholder="Username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <p class="text-danger">{{ $errors->first('username') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'has-error':'' }}" id="name" name="name" placeholder="Nama..." value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control {{ $errors->has('password') ? 'has-error':'' }}" id="password" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="r_password">Ulang Password</label>
                                <input type="password" class="form-control {{ $errors->has('r_password') ? 'has-error':'' }}" id="r_password" name="r_password" placeholder="Ulang Password">
                                @if ($errors->has('r_password'))
                                    <p class="text-danger">{{ $errors->first('r_password') }}</p>
                                @endif
                            </div>

                            <button id="btn-tambah" type="submit" class="btn btn-success mr-2">Tambah</button>
                            <button type="button" onclick="batalEdit()" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data User</h6>
                        <hr />

                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Cari</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="search" class="form-control" name="search"></input>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-primary" onclick="searchData()"><i class="fa fa-search"></i></button>
                            </div>
                        </div>


                        <div class="table-responsive">
                            @php
                                $no = 1;
                            @endphp
                            <table id="table-user" class="table table-striped table-hover table-sm" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('js')
    <script>
        
    </script>
@endsection

