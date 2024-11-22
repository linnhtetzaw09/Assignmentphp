<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}">

</head>
<body class="bg-light">
    
    <section id="contact" class="p-5 contacts">
        <div class="container-fluid">
            <div class="col-md-5 mx-auto">
                <h5 class="display-4 mb-3 text-center text-white fw-bold">Stay Updated with Announcements</h5>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group py-3 my-2">
                        <label for="name" class="labels">Full Name <span class="text-danger">* required</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your name" 
                            value="{{ old('name') }}" 
                            required 
                            autocomplete="off"
                        />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="email" class="labels">Email Address <span class="text-danger">* required</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="off"
                        />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="password" class="labels">Password <span class="text-danger">* required</span></label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your password" 
                            required 
                            autocomplete="off"
                        />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="password_confirmation" class="labels">Confirm Password <span class="text-danger">* required</span></label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="form-control p-3 inputs" 
                            placeholder="Confirm your password" 
                            required 
                            autocomplete="off"
                        />
                    </div>

                    <div class="my-4">
                        <div class="form-check">
                            <input type="checkbox" id="accept" name="accept" class="form-check-input" />
                            <label for="accept" class="form-check-label text-light">I agree to receive notifications</label>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Sign Up</button>
                    </div>
                </form>
                
                <p class="text-center text-white mt-3">Already have an account? <a href="{{ route('login.form') }}" class="text-decoration-none">Login here</a></p>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
