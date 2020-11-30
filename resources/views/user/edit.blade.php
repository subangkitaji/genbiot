@extends('templates.master')
@section('content')
<div class="content-wrapper">
    <div class="row">

      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><a href="{{ url('/dashboard/register') }}"><i class="fa fa-arrow-left"></i></a> Edit Admin</h4>

          <form class="forms-sample" method="post" action="{{ url('/dashboard/register/update/' . $users->id) }}" >
            @csrf

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" {{ $errors->has('username') ? 'has-error':'' }} value="{{ $users->username }}">

                @if ($errors->has('username'))
                      <p class="text-danger">{{ $errors->first('username') }}</p>
                  @endif
              </div>

              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name"  {{ $errors->has('name') ? 'has-error':'' }} value="{{ $users->name }}">
                @if ($errors->has('name'))
                      <p class="text-danger">{{ $errors->first('name') }}</p>
                  @endif
              </div>

             
              <button type="submit"  class="btn btn-success mr-2">Simpan</button>
              <button type="reset" class="btn btn-light">Bersihkan</button>
             
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection
@section('js')
    
    <script>
     
    </script>
@endsection
