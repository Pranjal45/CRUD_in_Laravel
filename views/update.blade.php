<h1>Add data</h1>
<form action="{{route('updateuser-show',$datas->id)}}" method="POST">
@csrf
Name: <input type="text" name='name' value="{{$datas->name}}">
Email: <input type="text" name='email'value="{{$datas->email}}">
<button>Update</button>
</form>