<x-template>
    <div class="container">
        <h1>Shopping cart</h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th class="text-end">Price</th>
                    <th class="text-end">Quantity</th>
                    <th class="text-end">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @php
                $total = 0;
                @endphp
                @foreach ($items as $item)
                @php
                $subtotal = $item->quantity * $item->product->price;
                $total += $subtotal;
                @endphp
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td class="text-end">{{ number_format($item->product->price, 0, 2, '.') }}</td>
                    <td class="text-end">{{ $item->quantity }}</td>
                    <td class="text-end">{{ number_format($subtotal, 0, 2, '.') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="fw-bold">
                <tr>
                    <td colspan="3">Total</td>
                    <td class="text-end">{{ number_format($total, 0, 2, '.') }}</td>
                </tr>
            </tfoot>
        </table>

        @if($items->isNotEmpty())
        <form method="post" action="{{ route('invoice.create') }}">
            @csrf
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-lg">Checkout</button>
            </div>
        </form>
        @endif
    </div>
</x-template>
