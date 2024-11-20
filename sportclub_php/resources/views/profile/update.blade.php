<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Management</title>
</head>
<body>
    <h2>Edit Profile</h2>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div>
            <label for="preferred_sport">Preferred Sport:</label>
            <input type="text" name="preferred_sport" id="preferred_sport" value="{{ $user->preferred_sport }}">
        </div>
        <div>
            <label for="skill_level">Skill Level:</label>
            <input type="text" name="skill_level" id="skill_level" value="{{ $user->skill_level }}">
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>
