@section('title')
    Welcome
@endsection

@extends('Users.Member.layouts.app')

@section('content')
		
		<div id="fh5co-services-section">
            @if (Session::has('dataInform'))
                <h4 class="alert alert-warning animate-box text-center" role="alert">
                    {{ Session::get('dataInform') }}
                </h4>
            @endif
			<div class="container">
				<div class="row display-flex justify-content">
					<div class="col-md-6 col-sm-6 col-md-offset-3">
						<div class=" animate-box">
							<div class="col-md-12 ">
                                <h3>General Information</h3>
                                <form action="{{ route('admin#userUpdated', $userData->id) }}" method="POST">
                                    @csrf
                                    <label class="userManagement">Name</label><br>
                                    <input name="name" class="input-md col-md-12" type="text" value="{{ old('name', $userData->name) }}"/>

                                    {{-- <label class="userManagement">Gender</label><br> --}}
                                    <input name='gender' class="input-md col-md-12" type="hidden" value="{{ old('gender', $userData->gender) }}"/><br><br>

                                    <label class="userManagement">Age</label><br>
                                    <input name="age" class="input-md col-md-12" type="text" value="{{ old('age', $userData->age) }}"/><br><br>

                                    <label class="userManagement">Contact</label><br>
                                    <input name='phone' class="input-md col-md-12" type="text" value="{{ old('phone', $userData->phone) }}"/><br><br>

                                    <label class="userManagement">Address</label><br>
                                    <input name="address" class="input-md col-md-12" type="text" value="{{ old('address', $userData->address) }}"/><br><br>

									<label class="userManagement">Email</label><br>
                                    <input name='email' class="input-md col-md-12" type="text" value="{{ old('email', $userData->email) }}"/><br><br>

                                    <div class="text-center"> 
                                        <button class="btn-primary">Update</button> &nbsp;
                                        <a href="{{ route('admin#allMembers') }}">Cancel</a>
                                    </div>
                                </form>
							</div>
						</div>
						<div class=" animate-box">
							<div class="col-md-12 ">
                                <h3 class="mt-5 pt-5">Member Details</h3>
                                <form action="{{ route('admin#memberUpdated', $userData->id) }}" method="POST">
                                    @csrf
                                    <label class="userManagement">Care Giver's Name</label><br>
                                    <input name="member_caregiver_name" class="input-md col-md-12" type="text" value="{{ old('member_caregiver_name', $memberData->member_caregiver_name) }}"/><br><br>

									<label class="userManagement">Care Giver's Relationship</label><br>
                                    <input name="member_caregiver_relation" class="input-md col-md-12" type="text" value="{{ old('member_caregiver_relation', $memberData->member_caregiver_relation) }}"/><br><br>

                                    <label class="userManagement">Member Medical Condition</label><br>
                                    <input name="member_medical_condition" class="input-md col-md-12" type="text" value="{{ old('member_medical_condition', $memberData->member_medical_condition) }}"/><br><br>

                                    <label class="userManagement">Member Medical Number</label><br>
                                    <input name="member_medical_number" class="input-md col-md-12" type="text" value="{{ old('member_medical_number', $memberData->member_medical_number) }}"/>

									{{-- <label class="userManagement">Member Meal Type</label><br> --}}
                                    <input name="member_meal_type" class="input-md col-md-12" type="hidden" value="{{ old('member_meal_type', $memberData->member_meal_type) }}"/><br><br>

                                    <label class="userManagement">Duration (Read Only)</label><br>
                                    <input name="member_meal_duration" class="input-md col-md-12" type="number" readonly="readonly" value="{{ old('member_meal_duration', $memberData->member_meal_duration) }}"/> <br><br>

                                    <div class="text-center"> 
                                        <button class="btn-primary">Update</button> &nbsp;
                                        <a href="{{ route('admin#allMembers') }}">Cancel</a>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END What we do -->

@endsection