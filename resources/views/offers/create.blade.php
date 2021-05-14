<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{__('Add Your Offer!')}}</h1>
    <form action="{{route('offers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(Session::has('success'))
            <h1>{{Session::get('success')}}</h1>
        @endif

        <input type="text" name="name" id="" placeholder="Name">
        @error('name')
            {{$messages}}
        @enderror

        <input type="text" name="price" id="" placeholder="Price">
        @error('price')
            {{$messages}}    
        @enderror

        <input type="text" name="details" id="" placeholder="Details">
        @error('details')
            {{$messages}}              
        @enderror

        <input type="file" name="photo" id="" placeholder="">
        @error('details')
            {{$messages}}              
        @enderror

        <input type="submit" value="Submit">
    </form>

    
</body>
</html>