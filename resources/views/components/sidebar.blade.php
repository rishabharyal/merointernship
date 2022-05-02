<ul class="list-group">
    <a class="list-group-item active" href="/account">My Account</a>
    <a class="list-group-item" href="{{ action('AccountController@edit', $user->id) }}">Edit Info</a>
    <a class="list-group-item" href="{{ action('OrganizationController@edit', $user->id) }}">My Company</a>
    <a class="list-group-item" href=" {{ url('company/internships') }}">Internships</a>
</ul>
