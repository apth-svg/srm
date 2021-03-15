@extends('layouts.app')
@section('title','Create Slider')

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Slider</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                  <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Sub Title</label>
                            <input type="text" name="sub_title" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                            <label>Image</label>
                            <input type="file" name="image">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <a href="" class="btn btn-warning pull-right">Back</a>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
@endsection

@push('js')
  
@endpush