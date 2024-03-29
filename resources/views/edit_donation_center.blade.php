<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container py-4">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Edit Donation Center</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="{{ route('add.donation_center') }}" class="p-3">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="hidden" name="id" value="{{ $center->id }}">
                                        <label class="input-group input-group-outline mb-3"> Center Name :</label>
                                        <input value="{{ $center->center_name }}" type="text" class="form-control border-l-4 @error('center_name') is-invalid @enderror" name="center_name"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('center_name')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3"> Location :</label>
                                        <input value="{{ $center->location }}" type="text" class="form-control @error('location') is-invalid @enderror" name="location" >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                                @error('location')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3">Contact Number :</label>
                                        <input value="{{ $center->contact_number }}" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number"  >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                            @error('contact_number')
                                                {{ $message }}
                                                @enderror
                                        </span>
                                        </div>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="input-group input-group-outline mb-3 ">Email :</label>
                                        <input value="{{ $center->email }}" type="email"  class="form-control border-l-4 @error('email') is-invalid @enderror" name="email" >
                                        <div class="input-group input-group-outline mb-3">
                                            <span class="text-danger">
                                            @error('email')
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
        </div>
    </main>
</x-app-layout>
