<html>
<body>

  @if ($products)
   @foreach($products as $pro)

<div >
       {{ $pro->id }}
       {{ $pro->product_name}}
       {{$pro->product_colors}}
</div>
   @endforeach
@endif

</body>


</html>
