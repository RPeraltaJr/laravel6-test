<div class="container my-4">
    <div class="row">
        @foreach($cards as $card)
            <div class="col col-3">
                <div class="card">
                    <img src="{{ $card->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $card->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>