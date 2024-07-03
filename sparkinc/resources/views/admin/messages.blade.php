@extends('admin.layouts.admin')

@section('content')
    <div class="admin-content">
        @if(session('success'))
            <div class="alert alert-danger" id="successMessage">
                {{ session('success') }}
            </div>
            <script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 3000);
        </script>
        @endif

        <div class="container-fluid">
            @foreach($messages as $message)
            <div class="review">

                <div class="user">
                    <div class="username">{{ $message->firstname }} {{ $message->lastname }}</div>
                    <div class="useremail"><em>{{ $message->email }}</em></div>
                    <div class="emaildate">{{ $message->created_at->format('F j, Y') }}</div>
                    <div class="userreview">{{ $message->message }}</div>
                </div>
                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" novalidate>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger admin-delete">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection