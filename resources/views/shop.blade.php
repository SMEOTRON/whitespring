<html>
<body>

  @if ($products)
   @foreach($products as $pro)

<div >
       {{ $pro->id }}
       {{ $pro->product_name}}
       {{$pro->product_colors}}
       <img src= "{{$pro->product_image}}" />
</div>
   @endforeach
@endif

</body>


</html>
