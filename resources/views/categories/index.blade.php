{{--
    Index page to view all categories
--}}

@extends('admin.main')

@section('title', 'All Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Disable/Enable</th>
                    </thead>
                    <tbody>
                        @foreach($cats as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>
                                    {!! Form::open(['route' => ['categories.destroy', $cat->id], 'method' => 'delete']) !!}
                                        <input type="submit" value="@if($cat->status == 1) Disable @else Enable @endif" class="btn @if($cat->status == 1) btn-danger @else btn-success @endif">
                                    {!! Form::close() !!}
                                </td>
                                <td><button class="btn btn-warning" onclick="tog({{ $cat->id }})">Edit Name</button></td>
                            </tr>
                            <tr class="toHide" id="edit{{ $cat->id }}">
                                {!! Form::open(['route' => ['categories.update', $cat->id], 'method' => 'put']) !!}
                                    <td></td>
                                    <td><input type="text" name="name" value="{{ $cat->name }}" class="form-control" /></td>
                                    <td></td>
                                    <td><button class="btn btn-success">Save Name</button></td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        $('.toHide').hide();

        function tog(id){
            $('#edit'+id).slideToggle();
        }
    </script>
@endsection