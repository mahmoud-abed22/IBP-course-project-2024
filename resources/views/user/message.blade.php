
@extends('components.indexUser')
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;"><a href="{{route('user_messages')}}" style="color: red ; font-size:35px "><i class='bx bx-left-arrow-circle '></i></a> </h4>
<div style="padding: 10px;">
    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
      
            <div class=" ">
      
              <ul class="list-unstyled">
              @foreach($allmessages as $allmessage)

    
              @if($allmessage->from_id == Auth::user()->id)

                <li class="d-flex justify-content-end mb-4">
                  <div class="card w-50 ">
                    <div class="card-header d-flex justify-content-between p-2">
                      <p class="fw-bold mb-0" style="text-transform:capitalize">{{Auth::user()->name}} {{Auth::user()->surname}}</p>
                    </div>
                    <div class="card-body">
                      <p class="mb-0">
                      {{$allmessage->message}}
                      </p>
                    </div>
                  </div>
                  <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}+{{Auth::user()->surname}}&background=4e7a9a&color=fff&size=80" alt="avatar"
                    class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                </li>
                @else

                 <li class="d-flex justify-content-lg-start mb-4">
                  <img src="https://ui-avatars.com/api/?name={{$user->name}}+{{$user->surname}}&background=4e7a9a&color=fff&size=80" alt="avatar"
                    class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                  <div class="card w-50">
                    <div class="card-header d-flex justify-content-between p-2">
                      <p class="fw-bold mb-0">{{$user->name}} {{$user->surname}} Merkezi</p>
                    </div>
                    <div class="card-body">
                      <p class="mb-0"> {{$allmessage->message}}</p>
                    </div>
                  </div>
                </li>
              @endif
                
              @endforeach
          </ul>

              <form action="{{route('newmessage' , $user->id )}}" method="post" >
              @csrf
              @method('post')

                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample2" rows="4" name="message" ></textarea>
                </div>
                <br>
                <button class="btn btn-info btn-rounded float-end">Send</button>

              </form>
      
            </div>
      
          </div>
      
        </div>
      </section>

</div>

@stop