<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="/add-donation_record">Add  Donation Records</a></button>
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Donation Records table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    {{--<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>--}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Donation Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Recipient Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity_Transfused </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transfusion Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transfusion Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $id => $records)
                                    <tr>
                                        <td class="align-middle">
                                            {{ $records->donation_id }}
                                        </td>

                                        <td  class="align-middle">
                                            {{ $records->recipient_id }}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $records->quantity_transfused}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $records->transfusion_date}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $records->transfusion_status}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a class="btn btn-link text-dark px-3 mb-0"  href="{{ route('record.edit.form',$records->id) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a onclick="return confirm('Are You Sure You Want To Delete This Donation Record.')" class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{ route('delete.record',$records->id)}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
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
