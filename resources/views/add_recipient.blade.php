<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container py-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Add New Recipient</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="{{ route('add.recipient') }}" class="p-3">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3"> Name :</label>
                                        <input value="{{ old('fname') }}" type="text" class="form-control border-l-4 @error('fname') is-invalid @enderror" name="fname" placeholder="First Name">
                                        <span class="text-danger">
                                            @error('fname')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                        <input value="{{ old('lname') }}" type="text" class="form-control border-l-4" name="lname" placeholder="Last Name" >
                                        <span class="text-danger">
                                            @error('lname')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3 ">Date Of Birth :</label>
                                        <input value="{{old('birth_date')}}" type="date"  class="form-control border-l-4 @error('birth_date') is-invalid @enderror" name="birth_date" >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('birth_date')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Gender:</label>
                                        <input value="{{old('gender')}}" type="text" class="form-control border-l-4 @error('gender') is in-valid @enderror" name="gender"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="tex-danger">
                                                @error('gender')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Contact No:</label>
                                        <input value="{{old('contact')}}" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact"   >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('contact')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Email :</label>
                                        <input value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Blood Type :</label>

                                        <select class="form-control" name="blood_type" >
                                          @foreach($blood_type as $data )
                                                <option value="{{$data->id}}">{{$data->blood_group}} </option>
                                            @endforeach

                                        </select>

                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Required Units :</label>
                                        <input value="{{old('required_units')}}" type="number" class="form-control @error('required_units') is-invalid @enderror" name="required_units"   >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('required_units')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Address :</label>
                                        <textarea value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror" name="address"  ></textarea>
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('address')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Hospital :</label>
                                        <input value="{{old('hospital')}}" type="text" class="form-control @error('hospital') is-invalid @enderror" name="hospital"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('hospital')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
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
</x-app-layout>
