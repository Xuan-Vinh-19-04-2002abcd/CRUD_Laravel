<a href="/form">Add product</a>
@if (isset($listProduct))
    @foreach ($listProduct as $Product )
        <h1>{{$Product->name_product}} </h1>
        <img src={{$Product->image_product}}/>
        <p> {{$Product->price_product}} </p>
        <a href="/edit{{$Product->id_product}}">Edit</a>
        <a href="/delete{{$Product->id_product}}">Delete</a>
    @endforeach
@endif

