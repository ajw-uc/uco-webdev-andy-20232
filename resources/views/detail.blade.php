<x-template>
    <div class="row">
        <div class="col-md-4">
            <img src="https://img.lazcdn.com/g/p/db5ee9c40b70ba33d459a160b5e3cc8a.jpg_960x960q80.jpg_.webp" class="card-img-top" alt="...">
        </div>
        <div class="col-md-8">
            <h5 class="card-title">Sepatu {{ $id }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('catalog') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</x-template>
