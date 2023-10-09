@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.room')}} /</span> {{__('app.edit_room')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.edit_room')}}</h5>
                <div class="dropdown">
                    <a href="{{ route('rooms.index') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-buildings me-1"></span>{{__('app.room')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('rooms.update', $room->id) }}">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" value="{{$room->name}}" name="name" id="basic-icon-default-fullname"
                                placeholder="{{__('app.label_required')}}{{__('app.room')}}" required="" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room_number')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="room_number" value="{{$room->room_number}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> {{__('app.cost')}} <span
                                class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="number" class="form-control" name="cost"
                                placeholder="Room Cost" required="" value="{{$room->cost}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">{{__('app.status')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class='bx bx-check-square'></i></span>
                            <select class="form-select" name="status" id="bs-validation-country">
                                <option value="0" {{$room->status == 0 ? 'selected' : ''}}>{{__('app.status_active')}}</option>
                                <option value="1" {{$room->status == 1 ? 'selected' : ''}}>{{__('app.status_in_active')}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="basic-icon-default-message">{{__('app.description')}}</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="description" class="form-control">{{ $room->description}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"><i class='bx bxs-save me-1'></i>{{__('app.btn_save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
