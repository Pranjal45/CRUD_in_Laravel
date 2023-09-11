<h1>Data fetched</h1>

<a href="/addnew"><h2>Add</h2></a>
<table border='1'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Action</strong></td>
    </tr>

    @foreach ($datas as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td><a href="{{route('view-show',$data->id)}}">View</a>
            <a href="{{route('update-show',$data->id)}}">update</a>
            <a href="{{route('delete-show',$data->id)}}">delete</a></td>
        </tr>
    @endforeach
</table>