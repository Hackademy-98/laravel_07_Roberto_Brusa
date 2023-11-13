<x-layout>
    <x-navbar/>
    <h1>Sign-In</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="name" value="{{old('name')}}">
                        @error('name')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>