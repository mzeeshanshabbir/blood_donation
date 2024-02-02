<x-app-layout>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0">Add  Donation Records</button>
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
