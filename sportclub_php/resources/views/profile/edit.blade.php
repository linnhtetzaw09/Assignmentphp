@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <div class="mb-3">
            <label for="preferred_sport" class="form-label">Preferred Sport</label>
            <input type="text" class="form-control" name="preferred_sport" value="{{ old('preferred_sport', $user->preferred_sport) }}">
        </div>
        <div class="mb-3">
            <label for="skill_level" class="form-label">Skill Level</label>
            <input type="text" class="form-control" name="skill_level" value="{{ old('skill_level', $user->skill_level) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
