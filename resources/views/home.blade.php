<x-template>
    <div class="row">
        @for($i=0;$i<5;$i++)
        <div class="col-md-6 col-lg-3">
            <div class="card mb-3">
                <img src="https://img.lazcdn.com/g/p/db5ee9c40b70ba33d459a160b5e3cc8a.jpg_960x960q80.jpg_.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sepatu {{ $i }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{ route('catalog-detail', ['id' => $i]) }}" class="btn btn-primary">Lihat detail</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</x-template>
