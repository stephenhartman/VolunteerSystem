<div class="container-fluid">
    <header class="navbar navbar-fixed-top">
        <nav class="navbar navbar-inverse bg-faded">
            <div class="container-fluid">
                <ul class="navbar-nav nav">
                    <li>
                        <a class="btn btn-secondary" href="{{ URL::to('members/') }}">Manage Volunteers</a>
                    </li>
                    <li>
                        <a class="btn btn-secondary" href="{{ URL::to('opportunities/') }}">Manage Opportunities</a>
                    </li>
                    <li>
                        <a class="btn btn-secondary" href="{{ URL::to('about') }}">About Us</a>
                    </li>
                </ul>
                <form class="form-inline navform my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
</div>
