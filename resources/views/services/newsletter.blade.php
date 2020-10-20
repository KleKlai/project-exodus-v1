<div class="card mt-4">
    <div class="card-body text-center">
        <h2>Exciting things to come...</h2>

        <p>
            {{ "Mindanao Art is constantly improving. Give me your email and
            I'll send you updates about the event and info on upcoming art gallery." }}
        </p>

        <form action="{{ url('newsletter') }}" method="post">
            @csrf

            <div class="form-row p-3">
                <div class="col-10">
                  <input type="email" class="form-control" name="email" placeholder="You're email address">
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-success">Subscribe</button>
                </div>
            </div>
            <small>{{ "I won't send you spam. Only golden nugglets from my brain. Unsubscribe at any time." }}</small>
        </form>
    </div>
</div>
