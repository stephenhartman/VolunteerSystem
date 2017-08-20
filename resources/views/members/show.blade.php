@extends('layout')

@section('content')

    <h3>Volunteer Information</h3>
    <div class="row">
        <div class="col-md-12">
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
                        <td>{{ Html::mailto($member->email) }}</td>
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
                            <div class="row">
                                <div class="col-md-12">
                                {{ Form::open(['method' => 'GET', 'route' => ['members.edit', $member->id]]) }}
                                {{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
                                {{ Form::close() }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                {{ Form::open(['method' => 'DELETE', 'route' => ['members.destroy', $member->id]]) }}
                                {{ Form::hidden('id', $member->id) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Emergency Contacts</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email</td>
                        <td>Street</td>
                        <td>City</td>
                        <td>State</td>
                        <td>Zipcode</td>
                        <td>Home Phone</td>
                        <td>Work Phone</td>
                        <td>Cell Phone</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member->emergency_contacts as $contact)
                        <tr>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ Html::mailto($contact->email) }}</td>
                            <td>{{ $contact->street }}</td>
                            <td>{{ $contact->city }}</td>
                            <td>{{ $contact->state }}</td>
                            <td>{{ $contact->zipcode }}</td>
                            <td>{{ $contact->home_phone }}</td>
                            <td>{{ $contact->work_phone }}</td>
                            <td>{{ $contact->cell_phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-3'>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Interests</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($member->interests as $interest)
                    <tr>
                        <td>{{ $interest->interest }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class='col-md-6'>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Skill</td>
                        <td>Skill Level</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member->skills as $skill)
                    <tr>
                        <td>{{ $skill->skill }}</td>
                        <td>{{ $skill->skill_level }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </ul>
        </div>
    </div>
@stop
