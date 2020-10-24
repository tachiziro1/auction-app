<h1>商品更新フォーム</h1>
<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<form action="/items/{{ $item->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $item->id }}">
    <p>
        商品名：<br>
        <input type="text" name="name" value="{{ $item->name }}">
    </p>
    <p>
        商品詳細：<br>
        <input type="text" name="description" value="{{ $item->description }}">
    </p>
    <p>
        価格：<br>
        <input type="number" name="price" value="{{ $item->price }}">
    </p>
    <p>
        出品者：<br>
        <input type="text" name="seller" value="{{ $item->seller }}">
    </p>
    <p>
        電子メール：<br>
        <input type="text" name="email" value="{{ $item->email }}">
    </p>
    <p>
        商品画像URL：<br>
        <input type="text" name="image_url" value="{{ $item->image_url }}">
    </p>
    <input type="submit" value="更新">
</form>