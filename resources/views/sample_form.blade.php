<h2>Pet List</h2>
<form method="POST" action="">
    @csrf
    <input type="submit" name="delete" value="削除">

    <table border="1">
        <tr>
            <th>名前</th>
            <th>生年月日</th>
            <th>性別</th>
            <th>削除</th>
        </tr>
        @foreach($pets as $pet)
        <tr>
            <td>{{$pet->name}}</td>
            <td>{{$pet->birthday}}</td>
            <td>{{$pet->gender}}</td>
            <td><input type="checkbox" name="delete_pets[]" value=""></td>
        </tr>
        @endforeach
    </table>
</form>

<form method="POST" action="">
    @csrf
    <p>データの追加</p>
    <input type="text" name="pet">
    <input type="submit" name="add" value="追加">
</form>