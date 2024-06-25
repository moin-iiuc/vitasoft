<x-navbar>
</x-navbar>
<section class="flex flex-row">
    @foreach ($products as $product)
    <div class="flex flex-row">
        <div>
        <img src="{{$product->url}}">
        </div>
        <div>
            <h3>{{$product->name}}</h3>
            <p>{{$product->sku}}</p>
            <p>{{$product->symbology}}</p>
            <p>{{$product->brands_id}}</p>
            @guest
                <button class="bg-red-500 text-white p-1 rounded">Buy Now</button>
                <button class="bg-black text-white p-1 rounded">Add to Cart</button>
            @endguest
        </div>
    </div>
        
    @endforeach

</section>