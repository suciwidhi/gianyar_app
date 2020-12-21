@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Ubah Data</h1>        
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        
        <form method="post" action="{{ route('penerima-bantuan.update', $penerima_bantuan->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">                
                <label for="first_name">Alamat:</label>
                <input type="text" class="form-control" name="first_name" value={{ $penerima_bantuan->alamat }} />
            </div>            
            <div class="form-group">
                <label for="last_name">:</label>
                <input type="text" class="form-control" name="last_name" value={{ $penerima_bantuan->last_name }} />
            </div>            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $penerima_bantuan->email }} />
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $penerima_bantuan->city }} />
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" name="country" value={{ $penerima_bantuan->country }} />
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control" name="job_title" value={{ $penerima_bantuan->job_title }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection