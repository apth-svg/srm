@extends('layouts.app')
@section('title','Slider')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
@endpush

@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">All Slider</h4>
                  {{-- <a href="{{ route('slider.create') }}" class="float-right btn btn-success">Create</a> --}}
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>No</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Image</th>
                        <th>Created At</th>
                      </thead>
                      <tbody>
                        @foreach ($sliders as $key=>$slider)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->sub_title }}</td>
                                <td>{{ $slider->image }}</td>
                                <td>{{ $slider->created_at }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
@endpush