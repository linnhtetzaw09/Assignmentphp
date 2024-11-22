<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Edit Profile</h1>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            <!-- Preferred Sport Dropdown -->
            <div class="mb-3">
                <label for="preferred_sport" class="form-label">Preferred Sport</label>
                <select 
                    id="preferred_sport" 
                    name="preferred_sport" 
                    class="form-select" 
                >
                    <option value="" disabled selected>Select your sport</option>
                    <option value="football" {{ old('preferred_sport', $user->preferred_sport) == 'football' ? 'selected' : '' }}>Football</option>
                    <option value="tennis" {{ old('preferred_sport', $user->preferred_sport) == 'tennis' ? 'selected' : '' }}>Tennis</option>
                    <option value="swimming" {{ old('preferred_sport', $user->preferred_sport) == 'swimming' ? 'selected' : '' }}>Swimming</option>
                    <option value="basketball" {{ old('preferred_sport', $user->preferred_sport) == 'basketball' ? 'selected' : '' }}>Basketball</option>
                </select>
            </div>

            <!-- Skill Level Dropdown -->
            <div class="mb-3">
                <label for="skill_level" class="form-label">Skill Level</label>
                <select 
                    id="skill_level" 
                    name="skill_level" 
                    class="form-select" 
                >
                    <option value="" disabled selected>Select your skill level</option>
                    <option value="beginner" {{ old('skill_level', $user->skill_level) == 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="player" {{ old('skill_level', $user->skill_level) == 'player' ? 'selected' : '' }}>Player</option>
                    <option value="professional" {{ old('skill_level', $user->skill_level) == 'professional' ? 'selected' : '' }}>Professional</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>
    
    <!-- Bootstrap JS Bundle -->
    <script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
