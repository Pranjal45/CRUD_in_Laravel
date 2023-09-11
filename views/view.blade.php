<h1><strong>Data View</strong></h1>

@foreach ($datas as $data)
<h2>Id:{{$data->id}}</h2>
<h2>Name:{{$data->name}}</h2>
<h2>Email:{{$data->email}}</h2>
@endforeach
