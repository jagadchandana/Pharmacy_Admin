<div>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">{{ Auth::user()->name }}</span><span
                    class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form wire:submit.prevent="edit">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Info.</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">First Name</label><input type="text"
                                wire:model="user.first_name" class="form-control" placeholder="first name"
                                value="">
                            @error('user.first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text"
                                wire:model="user.last_name" class="form-control" value="" placeholder="last name">
                            @error('user.last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                wire:model="user.email" class="form-control" placeholder="enter email" value="">
                            @error('user.email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="text"
                                wire:model="user.phone" class="form-control" placeholder="enter phone no."
                                value="">
                            @error('user.phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                wire:model="user.address" class="form-control" placeholder="enter address"
                                value="">
                            @error('user.address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">city</label><input type="text"
                                wire:model="user.city" class="form-control" placeholder="enter city" value="">
                            @error('user.city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">State</label><input type="text"
                                wire:model="user.state" class="form-control" placeholder="enter state" value="">
                            @error('user.state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12"><label class="labels">Zip Code</label><input type="text"
                                wire:model="user.zip" class="form-control" placeholder="enter zip code" value="">
                            @error('user.zip')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row mt-3">
                              <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                      class="form-control" placeholder="country" value=""></div>
                              <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                      class="form-control" value="" placeholder="state"></div>
                          </div> --}}
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                        Experience</span><span class="border px-3 p-1 add-experience"><i
                            class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                        class="form-control" placeholder="experience" value=""></div>
                <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                        class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
