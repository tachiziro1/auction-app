<h1>商品登録フォーム</h1>
<form action="/items" method="post">
    @csrf
    <p>
        商品名：<br>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        商品詳細：<br>
        <input type="text" name="description" value="{{ old('description') }}">
    </p>
    <p>
        価格：<br>
        <input type="number" name="price" value="{{ old('price') }}">
    </p>
    <p>
        出品者：<br>
        <input type="text" name="seller" value="{{ old('seller') }}">
    </p>
    <p>
        電子メール：<br>
        <input type="text" name="email" value="{{ old('email') }}">
    </p>
    <p>
        商品画像URL：<br>
        <input type="text" name="image_url" value="{{ old('image_url') }}">
    </p>

    <input type="submit" value="登録">
</form>