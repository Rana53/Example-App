<div>
    <table border="5">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Batch</td>
        </tr>
         @foreach($data as $datum)
             <tr>
                <td>{{$datum->name}}</td>
                <td>{{$datum->email}}</td>
                <td>{{$datum->batch}}</td>
             </tr>
        </tr>
        @endforeach
    </table>
    
</div>
