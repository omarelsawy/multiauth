@if(Auth::guard('web')->check())
    <p class="text-success">you are logged in as User</p>
    @else
    <p class="text-danger">you are logged out as User</p>
    @endif

@if(Auth::guard('admin')->check())
    <p class="text-success">you are logged in as Admin</p>
@else
    <p class="text-danger">you are logged out as Admin</p>
@endif