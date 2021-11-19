<link rel="stylesheet" href="style.css">


<table class="styled-table center">
    <thead>
        <tr>
            <th>Name</th>
            <th>Favorite Food</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($friends as $friend)
        <tr>
            <td>{{ $friend-> name }}</td>
            <td>{{ $friend-> favorite_food }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
