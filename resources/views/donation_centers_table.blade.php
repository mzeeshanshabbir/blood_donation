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
