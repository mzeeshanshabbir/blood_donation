<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container py-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add Donation Records</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="{{ route('add.donation_record') }}" class="p-3">
                                    @csrf

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Donation Date:</label>
                                        <select class="form-control @error('donation_id') is-invalid @enderror" name="donation_id" >
                                            @foreach( $don_date as  $data)
                                                <option value="{{ $data->id}}">{{ $data->donation_date}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Recipient Name :</label>
                                        <select class="form-control" name="recipient_id " >
                                            @foreach( $recip_date as  $dataa)
                                                <option value="{{ $dataa->id}}">{{ $dataa->first_name}}    {{$dataa->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Quantity Transfused :</label>
                                        <input value="{{old('quantity')}}" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('quantity')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3 ">Transfusion Date:</label>
                                        <input value="{{old('date')}}" type="date"  class="form-control border-l-4 @error('date') is-invalid @enderror" name="date"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('date')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Status:</label>
                                        <select class="form-control @error('status') is-invalid @enderror" name="status" >
                                            <option value="Succesfull">Succesfull</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
    </main>
</x-app-layout>
