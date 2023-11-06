@extends('layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="py-2 mb-3"><span class="text-muted fw-light">{{__('app.room')}} /</span> {{__('app.create_room')}}</h5>

        <!-- Responsive Table -->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">{{__('app.create_room')}}</h5>
                <div class="dropdown">
                    <a href="{{ url('send-message') }}" class="btn btn-primary">
                        <span class="tf-icons bx bx-buildings me-1"></span>{{__('app.message_table')}}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('update-message') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">{{__('app.room_number')}} <span
                                class=" text-danger">*</span></label>
                        <select name="room_id" id="room_id" class="form-control" required>
                            @foreach ($rooms as $room)
                                <option value="{{$room->id}}" {{ $room->id == $item->room_id ? 'selected' : ''}}>{{ $room->room_number }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label" for="basic-icon-default-message">{{__('app.write_message')}} <span
                            class=" text-danger">*</span></label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                    class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="msg" required class="form-control"
                                placeholder="{{__('app.label_required')}}{{__('app.description')}}">{{$item->msg}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary save"><i
                                class='bx bxs-save me-1'></i>{{__('app.btn_save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
