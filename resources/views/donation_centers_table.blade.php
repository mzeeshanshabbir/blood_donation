<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/new_donation_center">Add  Donation Center</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Donation Centers table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    {{--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>--}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Center Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact Number</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $center)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $center->center_name }}
                                        </td>

                                        <td  class="align-middle">
                                            {{ $center->location }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $center->contact_number}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $center->email}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="btn btn-link text-dark px-3 mb-0"  href="/new_donation_center"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a onclick="return confirm('Are You Sure You Want To Delete This Donation Center.');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete.center',$center->id) }}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
