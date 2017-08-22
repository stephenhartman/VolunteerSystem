<div class="col-md-2">
    {{ Form::open(['method' => 'GET', 'url' => 'opportunities', 'class' => 'form-inline navform my-2 my-lg-0', 'role' => 'search']) }}
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Opportunities">
            <span class="input-group-btn">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </span>
        </div>
    {{ Form::close() }}
</div>
<div class="col-md-3">
    <table class='table borderless'>
        <thead>
            <tr>
                <td id="borderless">Volunteer Centers</td>
        <tbody>
            <tr>
                <td>
                    {{ Form::open(['method' => 'GET', 'url' => 'opportunities', 'class' => 'form-inline navform col-md-3', 'role' => 'volunteer_center_id', 'style'=> 'display:inline-block']) }}
                    <select name="volunteer_center_id">
                        <option value="">All</option>
                        @foreach ($centers as $center)
                            <option value="{{ $center->id }}">{{ ucfirst($center->name) }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </td>
            </tr>
        </tbody>
    </table>
    {{ Form::close() }}
</div>
<div class="col-md-2">
    <table class='table borderless'>
        <thead>
            <tr>
                <td id="borderless">Opportunity Matches</td>
        <tbody>
            <tr>
                <td>
                    {{ Form::open(['method' => 'GET', 'url' => 'members', 'class' => 'form-inline navform col-md-3', 'role' => 'member', 'style'=> 'display:inline-block']) }}
                    <select name="opportunity_id">
                        @foreach ($opportunities as $opportunity)
                            <option value="{{ $opportunity->id }}">{{ ucfirst($opportunity->name) }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </td>
            </tr>
        </tbody>
    </table>
    {{ Form::close() }}
</div>
