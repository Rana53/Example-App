<div>
    <h1>User Pages</h1>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Seqence</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
        @endforeach
    </table>

        
</div>
