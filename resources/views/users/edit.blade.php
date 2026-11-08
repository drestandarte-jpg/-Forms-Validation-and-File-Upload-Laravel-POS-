<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Edit user</title></head>
<body style="font-family:Arial,sans-serif;max-width:650px;margin:40px auto;padding:0 16px;color:#222">
<h1>Edit user account</h1><p><a href="{{ route('users.index') }}">Back to user accounts</a></p>
@if($errors->any())<div role="alert" style="color:#a00"><strong>Please fix these errors:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">@csrf @method('PUT')
<p><label for="username">Username</label><br><input id="username" name="username" value="{{ old('username', $user->username) }}" required maxlength="100" style="width:100%;padding:8px"></p>
<p><label for="full_name">Full name</label><br><input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name) }}" required maxlength="255" style="width:100%;padding:8px"></p>
@if($user->avatar)<p>Current avatar<br><img src="{{ asset('storage/' . $user->avatar) }}" alt="Current avatar" width="100" height="100" style="border-radius:50%;object-fit:cover"></p>@endif
<p><label for="avatar">Profile picture (JPG, PNG, or WebP; maximum 2 MB)</label><br><input id="avatar" type="file" name="avatar" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"></p>
<button type="submit">Update user</button></form>
</body></html>
