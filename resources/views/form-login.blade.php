<div class="container">
    <h2 class="my-4">
        Form Login
    </h2>
    <hr>

    @if (session()->has('message'))
        <div class="alert alert-info w50">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control w-50" id="username" name="username" value="{{ old('username') }}">

            @error('username')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-2">
            Login
        </button>
    </form>
</div>