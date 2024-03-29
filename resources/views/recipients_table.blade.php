<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/add-recipient">Add New Recipient</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Recipients table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Of Birth</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Blood Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Required Units</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hospital</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
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
                                        <td class="align-middle text-center text-sm">
                                            <a class="btn btn-link text-dark px-3 mb-0"  href="{{ route('recipient.edit.form',$recipients->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a onclick="return confirm('Are You Sure You Want To Delete This Recipient.');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete.recipient',$recipients->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
