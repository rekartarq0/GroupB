<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="store" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <br>
        <label for="Price">Price</label>
        <input type="number" name="price" id="price">
        @error('price')
            {{ $message }}
        @enderror
        <br><br>
        <label for="note">note</label>
        <input type="text" name="note" id="note">
        @error('note')
            {{ $message }}
        @enderror
        <br><br>
        <input type="submit">
    </form>
   @foreach ($product as $item)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Note</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->note }}</td>
<td>
    <form method="POST" action="{{ route('delete', ['id' => $item->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</td>            </tr>
        </tbody>
    </table>
@endforeach

    
</body>
</html>