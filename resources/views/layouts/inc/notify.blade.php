
    @forelse ($user->unreadNotifications as $notification)
    <a class="dropdown-item" href="#">
        <span class="text-muted">{{ $notification->data['notify'] }}</span>
        {{ $notification->data['name'] }}
    </a>

    @empty
    <strong class="text-danger">NOt FOund</strong>
    @endforelse
    <a class="dropdown-item text-center text-success" href="#" id="notify">
        mark As Read
    </a>
