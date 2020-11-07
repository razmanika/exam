@extends('home')
@section('content')
<h1>Edit page</h1>

<div class="container">
    <h2>Edit your post</h2>
    <form method="post" class="form-horizontal" action="{{route("app.Update", $applicant->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Name:</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="name" placeholder="enter your name" name="name" value="{{old('name', $applicant->name)}}">
                @error('title')
                <li class="error">{{$errors->first('title')}}</li>
                @enderror
            </div>

            <div class="col-sm-10">
                <label class="control-label col-sm-2" for="text">Surname:</label>
                <input type="text" class="form-control" id="name" placeholder="enter your name" name="name" value="{{old('name', $applicant->name)}}">
                @error('title')
                <li class="error">{{$errors->first('title')}}</li>
                @enderror
            </div>

            <div class="col-sm-10">
                <label class="control-label col-sm-2" for="text">Position:</label>
                <input type="text" class="form-control" id="name" placeholder="enter your position" name="name" value="{{old('name', $applicant->position)}}">
                @error('title')
                <li class="error">{{$errors->first('title')}}</li>
                @enderror
            </div>
            <div class="col-sm-10">
                <label class="control-label col-sm-2" for="text">Phone:</label>
                <input type="number" class="form-control" id="name" placeholder="enter your phone" name="name" value="{{old('name', $applicant->phone)}}">
                @error('title')
                <li class="error">{{$errors->first('title')}}</li>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>

            </div>
            <h3 ><a href="/applicants" color="cyan"><- Go back</a></h3>
        </div>
    </form>
@endsection
