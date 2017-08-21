@if (Auth::check())
    <div class="container-fluid">
        <header class="navbar navbar-fixed-top">
            <nav class="navbar navbar-inverse bg-faded">
                <div class="container-fluid">
                    <ul class="navbar-nav nav col-md-7">
                        <li>
                            <a class="btn btn-secondary" href="{{ URL::to('members/') }}">Manage Volunteers</a>
                        </li>
                        <li>
                            <a class="btn btn-secondary" href="{{ URL::to('opportunities/') }}">Manage Opportunities</a>
                        </li>
                        <li>
                            <a class="btn btn-secondary" href="{{ URL::to('about') }}">About Us</a>
                        </li>
                        <li>
                            <a class="btn btn-secondary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
@endif
