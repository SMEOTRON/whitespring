<html>
<body>
<form method="post" action="/product/new" enctype="multipart/form-data" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="text" placeholder="product name" name="product_name"/>
<input type="text" placeholder="product price" name="product_price"/>
<input type="text" placeholder="product color" name="product_color"/>
<input type="file" value="select an image" name="image"/>
<input type="submit" value="add Product" />
</form>

</body>
</html>
