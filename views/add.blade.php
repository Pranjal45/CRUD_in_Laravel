<h1>Add data</h1>
<form action="{{route('add-show')}}" method="POST">
@csrf
Name: <input type="text" name='name' value="enter name">
Email: <input type="text" name='email' value="enter email">
<button>Submit</button>
</form>