@extends('layout')

@section('content')

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <h2>Volunteer Information</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Username</td>
                <td>Street</td>
                <td>City</td>
                <td>State</td>
                <td>Zipcode</td>
                <td>Home Phone</td>
                <td>Work Phone</td>
                <td>Cell Phone</td>
                <td>License?</td>
                <td>SS Card?</td>
                <td>Approval Status</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $member->first_name }}</td>
                <td>{{ $member->last_name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->username }}</td>
                <td>{{ $member->street }}</td>
                <td>{{ $member->city }}</td>
                <td>{{ $member->state }}</td>
                <td>{{ $member->zipcode }}</td>
                <td>{{ $member->home_phone }}</td>
                <td>{{ $member->work_phone }}</td>
                <td>{{ $member->cell_phone }}</td>
                @if ($member->ss_card == true)
                    <td>Yes</td>
                @else
                    <td>No</td>
                @endif
                @if ($member->drivers_license == true)
                    <td>Yes</td>
                @else
                    <td>No</td>
                @endif
                <td>{{ ucfirst($member->approval_status) }}</td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('members/' . $member->id . '/edit') }}">Edit Volunteer</a>
                </td>
            </tr>
        </tbody>
    </table>
    <ul>
        Emergency Contacts
        @foreach ($member->emergency_contacts() as $contact)
            <li>{{ $contact->first_name }} {{ $contact->last_name }}</li>
        @endforeach
    </ul>
@stop
