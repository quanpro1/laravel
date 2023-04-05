<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unicode-hoc lap trinh</title>
</head>
<body>
    <form action="{{route('admin.update',['id'=>1])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <input type="file" name="photo">

    <button type="submit">Submit</button>
    </form>
</body>
</html>