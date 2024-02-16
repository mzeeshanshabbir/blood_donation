<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/add-donation">Add New Donation</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Donations table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    {{--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>--}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Donor Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Donation Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Blood Type Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity in Ml</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $donations)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $donations->donor_id }}
                                        </td>

                                        <td  class="align-middle">
                                            {{ $donations->donation_date }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donations->blood_type_id}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donations->quantity_in_ml}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $donations->status}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="btn btn-link text-dark px-3 mb-0"  href="{{ route('edit.donation',$donations->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a onclick="return confirm('Are You Sure You Want To Delete This Donation.');" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{route('delete.donation',$donations->id)}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
