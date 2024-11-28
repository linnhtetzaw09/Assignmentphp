@foreach($events as $event)
    <div>
        <h3>{{ $event->title }}</h3>
        <p>{{ $event->description }}</p>
        <form action="{{ route('events.register', $event->id) }}" method="POST">
            @csrf
            <button type="submit">Register</button>
        </form>
    </div>
@endforeach