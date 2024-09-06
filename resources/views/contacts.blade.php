@extends('layouts.admin')

@section('title', 'Contact Form Entries')

@section('content')
<section class="section">
    <div class="container-fluid">
        <!-- Title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Contact Form Entries</h2>
                    </div>
                </div>
                <!-- Search Bar -->
                <div class="col-md-6">
                    <div class="search-wrapper title d-flex input-style-8">
                        <form action="{{ route('contacts.index') }}" method="GET" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search" name="search" value="{{ request('search') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Search Results -->
        @if(request('search'))
        <div class="alert alert-info">
            You searched for "{{ request('search') }}"
            @if($contacts->total() == 0)
            . No results match your query.
            @endif
        </div>
        @endif

        <!-- Table Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th><h6 class="text-sm text-medium">ID</h6></th>
                                    <th><h6 class="text-sm text-medium">Name</h6></th>
                                    <th><h6 class="text-sm text-medium">Email</h6></th>
                                    <th><h6 class="text-sm text-medium">Phone</h6></th>
                                    <th><h6 class="text-sm text-medium">Subject</h6></th>
                                    <th><h6 class="text-sm text-medium">Message</h6></th>
                                    <th><h6 class="text-sm text-medium">Date</h6></th>
                                    <th><h6 class="text-sm text-medium">Actions</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                <tr>
                                    <td><p class="text-sm">{{ $contact->id }}</p></td>
                                    <td><p class="text-sm">{{ $contact->name }}</p></td>
                                    <td><p class="text-sm">{{ $contact->email }}</p></td>
                                    <td><p class="text-sm">{{ $contact->phone }}</p></td>
                                    <td><p class="text-sm">{{ $contact->subject }}</p></td>
                                    <td><p class="text-sm">{{ Str::limit($contact->message, 50) }}</p></td>
                                    <td><p class="text-sm">{{ $contact->created_at->format('M d, Y') }}</p></td>
                                    <td>
                                        <div class="action">
                                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger bg-transparent border-0" onclick="return confirm('Are you sure you want to delete this contact form entry?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center text-sm">No contact form entries found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pagination -->
                <nav>
                    {{ $contacts->links('pagination::bootstrap-5') }}
                </nav>
                
            </div>
        </div>
    </div>
</section>
@endsection