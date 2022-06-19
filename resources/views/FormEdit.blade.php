@if (isset($item))
    <form action="/editform{{$item['id']}}" method="POST">
  @csrf
    <p>Name</p>
    <input type="text" name="name" value="{{$item['name']}}">
    <br>
    @error('name')
      <span style="color: red">{{$message}}</span>
    @enderror
    <p>Price</p>
    <input type="text" name="price" value={{$item['price']}} ><br>
    @error('price')
      <span style="color: red">{{$message}}</span>
    @enderror
    <p>Img</p>
    <input type="text" name="img" value={{$item['img']}}><br>
    @error('img')
      <span style="color: red">{{$message}}</span>
    @enderror
    <input type="submit" value="Update"><br>
</form>
@endif