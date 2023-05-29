{{-- products --}}
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>products</title>

    </head>
    <body class="antialiased">
        @foreach ($products as $product)

        <div>
            <image src="{{ $product->image }}">
            <h2>{{ $product->name }}</h2>
            <p>Rp {{ $product->price }}</p>
        </div>
        @endforeach
        <p>
            <form action="[[ route('checkout') ]]" method="POST">
                @csrf
            <button>checkout</button>
            </form>
    </body>
</html>
