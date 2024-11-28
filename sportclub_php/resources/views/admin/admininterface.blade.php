@extends('layouts.app')

@section('content')

<div class="container mt-5 pt-5">
    <h1 class="mb-4 mt-5 text-center text-primary">Admin Interface</h1>
    
    <!-- Statistics Section -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card bg-info text-white shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-4 fw-bold">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Events</h5>
                    <p class="card-text fs-4 fw-bold">{{ $totalEvents }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Management Section -->
    <div class="mt-5">
        <h2 class="text-secondary">Event Management</h2>

        <!-- Event Form -->
        <form id="eventForm" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Event Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="col-md-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
                <div class="col-md-6">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="col-md-6">
                    <label for="sport" class="form-label">Sport</label>
                    <input type="text" class="form-control" id="sport" name="sport" required>
                </div>
                <div class="col-md-6">
                    <label for="age_group" class="form-label">Age Group</label>
                    <input type="text" class="form-control" id="age_group" name="age_group" required>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Add Event</button>
        </form>

        <!-- Events Table -->
        <h3 class="mt-5 text-secondary">Existing Events</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $event->time }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <form action="" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Member Management Section -->
    <div class="mt-5">
        <h3 class="text-secondary">Member Management</h3>
        <a href="" class="btn btn-info w-100 mt-3">View Members</a>
    </div>
</div>


@endsection

