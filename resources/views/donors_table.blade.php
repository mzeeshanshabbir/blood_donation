<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/add-donor"> Add New Donor</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Donors table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Of Birth</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Blood Type </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Donation Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $donors)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $donors->first_name }}  {{ $donors->last_name }}
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->date_of_birth}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->gender}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->contact_number}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->email}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->blood_type_id}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->last_donation_date}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donors->address}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="btn btn-link text-dark px-3 mb-0"  href="{{ route('donor.edit.form',$donors->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a onclick="return confirm('Are you sure you want to delete this Donor?');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete.donor',$donors->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
