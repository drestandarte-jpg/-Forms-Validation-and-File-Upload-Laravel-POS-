<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>User accounts</title></head>
<body style="font-family:Arial,sans-serif;max-width:950px;margin:40px auto;padding:0 16px;color:#222">
<h1>User accounts</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<p><a href="{{ route('users.create') }}">Add user</a> | <a href="{{ route('customers.index') }}">Customers</a></p>
@if($users->isEmpty())<p>No user accounts yet.</p>@else
<table style="width:100%;border-collapse:collapse"><thead><tr><th align="left">Avatar</th><th align="left">Username</th><th align="left">Full name</th><th></th></tr></thead><tbody>
@foreach($users as $user)<tr>
<td style="border-top:1px solid #ddd;padding:8px"><img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="Avatar for {{ $user->full_name }}" width="56" height="56" style="border-radius:50%;object-fit:cover"></td>
<td style="border-top:1px solid #ddd;padding:8px">{{ $user->username }}</td><td style="border-top:1px solid #ddd;padding:8px">{{ $user->full_name }}</td><td style="border-top:1px solid #ddd;padding:8px"><a href="{{ route('users.edit', $user) }}">Edit / add avatar</a></td>
</tr>@endforeach
</tbody></table>{{ $users->links() }}
@endif
</body></html>
