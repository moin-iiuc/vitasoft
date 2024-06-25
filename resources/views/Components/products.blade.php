<x-navbar>
</x-navbar>
<section class="grid grid-cols-4 gap-4 border-blue-500">
    @foreach ($products as $product)
    <div class="flex  border-solid border-blue-500 p-1">
        <div class="text-center">
            <h3>Product Name:{{$product->name}}</h3>
            <p>SKU:{{$product->sku}}</p>
            <p>Symbology:{{$product->symbology}}</p>
            <p>Brand: {{$product->brands_id}}</p>
                <button class="bg-red-500 text-white p-1 rounded">Buy Now</button>
                <button class="bg-black text-white p-1 rounded">Add to Cart</button>
            
        </div>
    </div>
        
    @endforeach

</section>