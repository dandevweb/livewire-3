<div>
    <ul>
        @foreach ($this->users as $user)
            <li>
                {{ $user->name }} :: {{ $user->email }}
                </a>
            </li>
        @endforeach

        {{ $this->users->links() }}
    </ul>
</div>
