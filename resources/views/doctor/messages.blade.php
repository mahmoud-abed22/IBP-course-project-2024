
@extends('components.indexDoctor')
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">  Messages </h4>
<section >
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-12 mb-4 mb-md-0">
            <div class="card">
              <div class="card-body">
                <ul class="list-unstyled mb-0">
        
               @foreach($messages as $message)
              <?php 
               $user = $users->where('id', $message->from_id)->first() ;
              ?>
                  <li class="p-2 border-bottom" style="">
                    <a href="{{route('message', $message->id)}}" class="d-flex justify-content-between">  {{--link--}}
                      <div class="d-flex flex-row">
                        <img src="https://ui-avatars.com/api/?name={{$user->name}}+{{$user->surname}}&background=4e7a9a&color=fff&size=80" alt="avatar"
                          class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                        <div class="pt-1">
                          <p class="fw-bold mb-0" style="text-transform: capitalize" >{{$user->name . ' ' .$user->surname }} </p>
                          {{-- <p class="small text-muted">{{$message->message}}</p>   --}}
                        </div>
                      </div>
                    </a>
                  </li>
              @endforeach   
                </ul>

              </div>
            </div>
          </div>
      </div>
   </div>
</section>


@stop