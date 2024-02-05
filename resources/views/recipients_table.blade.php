<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/new_recipient">Add New Recipient</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Recipients table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    {{--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>--}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Of Birth</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Blood Type Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Required Units</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hospital</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $recipients)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $recipients->first_name }}
                                        </td>

                                        <td  class="align-middle">
                                            {{ $recipients->last_name }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->date_of_birth}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->gender}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->contact_number}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->email}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->blood_type_id}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->required_units}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->address}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $recipients->hospital_name}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
