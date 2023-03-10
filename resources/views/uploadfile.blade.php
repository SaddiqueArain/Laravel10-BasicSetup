<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3" style="width: 60%">

<h1>Upload The file</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Oops! There were some problems with your input.</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if($messge = Session::get('success'))
        <div class="alert alert-success text-center">{{ $messge }}</div>
    @endif



        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="agreement">File:</label>
            <input type="file" class="form-control" id="agreement" placeholder="upload file" name="agreement">
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        </form>

    <br><br><br>



    <table class="table table-bordered">
        <thead>
        <tr>
            <th>File</th>
            <th>Actions</th>
        </tr>
        </thead>

        @foreach($files as $file)
        <tbody>

        <tr>
            <td>{{$file->agreement}}</td>
            <td><a href="{{route('file.view',$file->id)}}" class="btn btn-sm btn-success">View</a>
                <a href="{{ url('/download',$file->agreement) }}" class="btn btn-sm btn-info">Download</a></td>

        </tr>

        </tbody>
        @endforeach
    </table>


</div>









</body>
</html>
