{{--
    Admin For recipies
--}}

@extends('admin.main')

@section('title', 'Recipies Admin')

@section('content')
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            height:150
        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{ Form::open(['route' => 'postRecipies']) }}
                    <input type="text" name="title" class="form-control" placeholder="title" />
                    <textarea name="ingredients" placeholder="ingredents"></textarea>
                    <textarea name="description" placeholder="description"></textarea>
                    <textarea name="steps" placeholder="steps"></textarea>
                    <button class="btn btn-success pull-right">Submit</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection