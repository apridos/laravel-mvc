<link rel="stylesheet" href="style.css">


<table class="styled-table center">
    <thead>
        <tr>
            <th>Name</th>
            <th>Favorite Food</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($friends as $friend)
        <tr>
        <form method="post" action="updateAFriend">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <td>
                <input type="text" name="name" value="{{$friend->name}}">
                <input type="hidden" name="id" value="{{$friend->id}}">
            </td>
            <td>
                <input type="text" name="favorite_food" value="{{$friend->favorite_food}}">
            </td>
            <td>
                <button type="submit">Update</button>
                <button type="button"><a href="/deleteAFriend/{{$friend->id}}">Delete</button>
            <td>
        </form>
        </tr>
    @endforeach

    </tbody>
</table>
