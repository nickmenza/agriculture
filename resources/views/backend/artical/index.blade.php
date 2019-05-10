@extends('backend.layout')

@section('more-style')
    <style>
    </style>
@endsection

@section('content')
    <div class="section-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="h4"> {{$title}} </div>
            <a href="{{url()->current().'/create'}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> เพิ่ม</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('more-script')
    <script>
    </script>
@endsection


