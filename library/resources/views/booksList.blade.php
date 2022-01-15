@extends('layouts.dashboard.admin')

@section('title')
    {{$title}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card strpied-tabled-with-hover">
            <div class="card-header ">
                <h4 class="card-title">Books List</h4>
                <p class="card-category">You can watch the books detail below</p>
            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>No.</th>
                        <th>Book's Title</th>
                        <th>Year</th>
                        <th>Author's Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </thead>
                    <tbody>
                        <?php $i = 1; $i < count($books) ?>
                        @foreach ($books as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->year }}</td>
                                <td>{{ $row->author_name }}</td>
                                <td>{{ $row->qty }}</td>
                                <td>{{ 'Rp'.$row->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection