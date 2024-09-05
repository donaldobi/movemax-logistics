@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Orders</h2>
                        <a href="{{ route('admin.orders.create') }}" class="main-btn primary-btn btn-hover btn-sm">
                            <i class="lni lni-plus mr-5"></i>New Custom Order
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search-wrapper title d-flex input-style-8">
                        <form action="{{ route('admin.orders.search') }}" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search..."
                                aria-label="Search" value="{{ $search ?? '' }}">
                            <span class="icon"><i class="lni lni-search-alt"></i></span>
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
        @if(isset($search))
        <div class="alert alert-info">
            You searched for "{{ $search }}"
            @if($orders->total() == 0)
            . No results match your query.
            @endif
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">

                    <!-- Responsive Table -->
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th class="text-sm text-medium">ID</th>
                                    <th class="text-sm text-medium">User ID</th>
                                    <th class="text-sm text-medium">User</th>
                                    <th class="text-sm text-medium">Order Date</th>
                                    <th class="text-sm text-medium">Email</th>
                                    <th class="text-sm text-medium">Tax</th>
                                    <th class="text-sm text-medium">Total</th>
                                    <th class="text-sm text-medium">Shipping Address</th>
                                    <th class="text-sm text-medium">Status</th>
                                    <th class="text-sm text-medium">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders as $order)
                                <tr>
                                    <td class="text-sm">Order #{{ $order->id }}</td>
                                    <td class="text-sm">{{ $order->user_id }}</td>
                                    <td class="text-sm">{{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                                    <td class="text-sm">{{ date('Y-m-d', strtotime($order->order_date)) }}</td>
                                    <td class="text-sm">{{ $order->email }}</td>
                                    <td class="text-sm">{{ number_format($order->pst + $order->gst + $order->hst, 2) }}</td>
                                    <td class="text-sm">{{ number_format($order->total_amount, 2) }}</td>
                                    <td class="text-sm">{{ Str::limit($order->shipping_address, 30) }}</td>
                                    @php
                                        $statusClasses = [
                                            'Processing' => 'warning-btn close-btn',
                                            'Shipped' => 'success-btn',
                                            'Delivered' => 'success-btn',
                                            'Cancelled' => 'close-btn',
                                        ];
                                        $status = $order->status;
                                        $class = $statusClasses[$status] ?? 'text-muted';
                                    @endphp
                                    <td>
                                        <span class="status-btn {{ $class }}">{{ $status }}</span>
                                    </td>
                                    <td>
                                        <div class="action">
                                            <a href="{{ route('admin.orders.show', $order->id) }}"
                                                class="text-info mr-10">
                                                <i class="lni lni-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.orders.edit', $order->id) }}"
                                                class="text-warning mr-10">
                                                <i class="lni lni-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger bg-transparent border-0"
                                                    onclick="return confirm('Are you sure you want to delete this order?')">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center text-sm">No orders found for your query.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- order pagination -->
                        <nav>
                            {{ $orders->links('pagination::bootstrap-5') }}
                        </nav>
                        
                    </div>
                    <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                        <div class="alert">
                            <p class="text-sm text-gray"> <span class="fw-bold"> Note:</span>
                                All orders are final. 
                                To maintain data integrity, order details may not be edited once placed.
                                You may only update the <span class="fw-bold"> status </span> of the order.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection