<x-template>
    <div class="mb-3">
        <a href="{{ route('catalog') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <section>
                <img src="https://img.lazcdn.com/g/p/db5ee9c40b70ba33d459a160b5e3cc8a.jpg_960x960q80.jpg_.webp" class="w-100 rounded-3" alt="...">
            </section>
        </div>
        <div class="col-lg-7">
            <div class="mt-3">
                <section>
                    <h3>{{ $product->name }}</h3>
                    <h1 class="fw-bold text-danger">Rp {{ number_format($product->price, 0, ',', '.') }}</h1>
                </section>
                <form class="my-4" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        Add to cart
                    </button>
                </form>
                <section>
                    <div class="fw-semibold mb-2">Description</div>
                    <p>{{ $product->description }}</p>
                </section>
            </div>
        </div>
    </div>
</x-template>
