{{ Form::open(['method' => 'GET', 'url' => 'members', 'class' => 'form-inline navform my-2 my-lg-0 col-md-2', 'role' => 'search']) }}
    <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="search" placeholder="Volunteers">
        <span class="input-group-btn">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </span>
    </div>
{{ Form::close() }}
{{ Form::open(['method' => 'GET', 'url' => 'members', 'class' => 'form-inline navform col-md-3', 'role' => 'approval_status']) }}
    <select name="approval_status">
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="rejected">Rejected</option>
    </select>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Approval Status</button>
{{ Form::close() }}
