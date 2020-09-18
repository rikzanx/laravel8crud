<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog Post Form  - Laravel 8 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Post</h2>
                </div>
                <div class="pull-right">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!!</strong> Ada masalah dengan inputan.
                <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>            
        @endif

        <form action="{{ route('posts.update',$post->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Post Title:</strong>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Post Title">
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <strong>Post Description:</strong>
                        <textarea name="description" style="height:150px;" class="form-control" placeholder="Post Description">{{ $post->description }}</textarea>
                    </div>
                </div>
                <button class="btn btn-primary ml-3">
                    Submit
                </button>
            </div>
        </form>

    </div>
</body>
</html>