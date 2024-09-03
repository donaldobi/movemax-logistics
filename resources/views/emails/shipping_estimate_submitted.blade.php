<h1>New Shipping Estimate Submitted</h1>

<p>Name: {{ $estimate->name }}</p>
<p>Email: {{ $estimate->email }}</p>
<p>Pickup Location: {{ $estimate->pickup_location }}</p>
<p>Pickup Address: {{ $estimate->pickup_address }}</p>
<p>Mobile: {{ $estimate->mobile }}</p>
<p>Item Weight: {{ $estimate->item_weight }} kg</p>
<p>Delivery Location: {{ $estimate->delivery_location }}</p>
<p>Delivery Address: {{ $estimate->delivery_address }}</p>
<p>Item Description: {{ $estimate->item_description }}</p>
<p>Delivery Cost: ${{ number_format($estimate->delivery_cost, 2) }}</p>