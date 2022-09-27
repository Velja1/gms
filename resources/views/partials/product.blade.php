<div class="product-item">
    <a href="{{ route('product', ["product" => $product->id]) }}"><img src="{{asset('/assets/images/'.$product->imagelink)}}" alt="{{$product->name}}"></a>
    <div class="down-content">
        <a href="{{ route('product', ["product" => $product->id]) }}">{{ $product->name }}</a>
        <h6>{{$product->price}} RSD</h6>
        <p>Release date:  {{$product->release_date}}</p>
        <a href="{{ route('product', ["product" => $product->id]) }}"><span>Details</span></a>
    </div>
</div>


