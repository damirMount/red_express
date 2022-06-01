<div class="sidebar-fixed position-fixed">
    <div class="list-group list-group-flush">
        {{--<a href="{{ route('home') }}" class="logo-wrapper waves-effect mb-3"--}}
           {{--style="text-align: center;padding-top: 10px;">--}}
            {{--<img src="{{ asset('image/admin_logo.svg') }}" class="img-fluid" alt="logo">--}}
        {{--</a>--}}
        <a href="{{ route('admin.blogs.index') }}"
           class="list-group-item list-group-item-action waves-effect {{ request()->is('admin/blog*') ? 'active' : '' }}">
            <i class="fas fa-building mr-3"></i>{{ __('Блоги') }}
        </a>
    </div>
</div>
