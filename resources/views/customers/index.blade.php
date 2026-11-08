<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Customers</title></head>
<body style="font-family:Arial,sans-serif;max-width:900px;margin:40px auto;padding:0 16px;color:#222">
<h1>Customers</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<p><a href="{{ route('customers.create') }}">Add customer</a> | <a href="{{ route('users.index') }}">User accounts</a></p>
@if($customers->isEmpty())<p>No customers yet.</p>@else
<table style="width:100%;border-collapse:collapse"><thead><tr><th align="left">Full name</th><th align="left">Email</th><th></th></tr></thead><tbody>
@foreach($customers as $customer)<tr><td style="border-top:1px solid #ddd;padding:10px 4px">{{ $customer->full_name }}</td><td style="border-top:1px solid #ddd;padding:10px 4px">{{ $customer->email }}</td><td style="border-top:1px solid #ddd;padding:10px 4px"><a href="{{ route('customers.edit', $customer) }}">Edit</a></td></tr>@endforeach
</tbody></table>{{ $customers->links() }}
@endif
</body></html>
