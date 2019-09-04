<form method="post" action="/home">
    @csrf
    <input type="text" name="desc" placeholder="Product Description">
    <input type="text" name="price" placeholder="List Price">
    <input type="text" name="price_dc" placeholder="Discount Percent">
    <button type="submit">Caculate</button>
</form>
