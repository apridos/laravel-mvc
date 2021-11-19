<link rel="stylesheet" href="style.css">
<table class="styled-table center">
    <thead>
        <tr>
            <th>Name</th>
            <th>Favorite Food</th>
            <th>Send</th>
        </tr>
    </thead>
    <tbody>
    <form method="post" action="addAFriend">
        <tr>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <td>
            <input type="text" name="name">
            </td>
            <td>
            <input type="text" name="favorite_food">
            </td>
            <td><button type="submit">Submit</button></td>
        </tr>
    </form>

    </tbody>
</table>
