<div class="card border-secondary mb-3 mx-auto">
    <div class="card-header bg-secondary text-white h4">{{ $user->name }} Reviews</div>
    <div class="card-body">
        @forelse($user->reviews as $review)
            <div>
                <div class="reviewHeader">
                    <span class="h5">{{ $review->owner->name }}</span>
                    <span>{!! $review->rating !!}</span>
                </div>
                <div class="reviewBody">
                    <p>{{ $review->comment }}</p>
                </div>
            </div>
            <hr class="border-primary"/>
        @empty
            There are no reviews for this user.
        @endforelse
        @if((Auth::user()) &&
            (Auth::id() != $item->user->id) &&
            (Auth::user()->hasRented($item)))
            <form action=" {{ route('users.reviews.add', $user) }}" method="POST">
                @csrf
                <textarea style="width: 100%;" rows=5 min=1 max=5 placeholder="How did you like this user?" required name="comment"></textarea>
                <label for="value">How many stars: </label>
                <input name="value" type="number" value="{{ old('number') }}" placeholder="(1 - 5)" required/>
                <button class="btn btn-primary">Review</button>
            </form>
        @endif
    </div>
</div>
