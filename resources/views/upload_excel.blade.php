<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Excel</title>
</head>
<body>
    <form method="POST" action="{{ url('upload_excel') }}" name="upload_doc" enctype="multipart/form-data">
        @csrf
        <input name="file" type="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>