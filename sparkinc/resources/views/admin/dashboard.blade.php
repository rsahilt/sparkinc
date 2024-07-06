@extends('admin.layouts.admin')
@section('content')

    <div class="admin-content">
        <div class="cards-container">
            <div class="admin-card" >
                <div class="admin-card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text" style="font-size:2rem">{{ $totalMessages }}</p>
                </div>
            </div>

            <div class="admin-card" >
                <div class="admin-card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text" style="font-size:2rem">{{ $totalProducts }}</p>
                </div>
            </div>

            <div class="admin-card" >
                <div class="admin-card-body">
                    <h5 class="card-title">Blogs</h5>
                    <p class="card-text" style="font-size:2rem">{{ $totalBlogs }}</p>
                </div>
            </div>
            
        </div>

        <div class="admin-highlights">
            <h1>Recent Interactions</h1>
            <table class="table table-striped msg-table-admin">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{ $message->id }}</th>
                        <td>{{ $message->firstname }}</td>
                        <td>{{ $message->lastname }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->message }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

@endsection

