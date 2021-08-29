@extends("pages.admin.layouts.layout")

@section("content")
    <main>
       <div class="container-fluid">
{{--           isto neki partial da bude--}}
           @include("pages.admin.partials.breadcrumb")
           <div class="row d-flex justify-content-around">

               @component("pages.admin.partials.notification-card",["textBefore" => "New user :","mainContent" => "newRegisteredUser",
                        "session" => true , "textAfter"=>"","route"=> "admin-activities","color"=>"primary"])
               @endcomponent
               @component("pages.admin.partials.notification-card",["textBefore" => "","mainContent" => "latestLoggedInUser",
                        "session" => true , "textAfter"=>"has just logged in","route"=> "admin-activities","color"=>"warning"])
               @endcomponent
               @component("pages.admin.partials.notification-card",["textBefore" => "","mainContent" => "latestLoggedOutUser",
                        "session" => true , "textAfter"=>"has just logged out","route"=> "admin-activities","color"=>"warning"])
               @endcomponent
               @component("pages.admin.partials.notification-card",["textBefore" => "Num of logged in users :","mainContent" =>
                        $activeUsers->sumloggedin, "session" => false , "textAfter"=>"","route"=> "admin-activities","color"=>"warning"])
               @endcomponent
               <div class="col-xl-3 col-md-6">
{{--                   @dd(session()->get("newestCommentOnPost"))--}}
                   <div class="card bg-success text-white mb-4">
                       <div class="card-body">New comment :  @if(session()->has("newestCommentOnPost")) by {{session()->get("newestCommentOnPost")->username}} @endif</div>
                       <div class="card-footer d-flex align-items-center justify-content-between">
                           <a class="small text-white stretched-link" href="@if(session()->has("newestCommentOnPost")){{route("admin-post",session()->get("newestCommentOnPost")->post_id)}} @else # @endif">View Details</a>
                                   <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                               </div>
                           </div>
               </div>
               <div class="col-xl-3 col-md-6 ">
                   {{--                   @dd(session()->get("newestCommentOnPost"))--}}
                   <div class="card bg-success text-white mb-4">
                       <div class="card-body ">
                           @if(session()->has("updatedCommentOnPost"))
                               {{session()->get("updatedCommentOnPost")->username}} has updated his comment
                           @else Waiting for user to update comment <i class="fas fa-spinner fa-pulse ml-3"></i>
                           @endif</div>
                       <div class="card-footer d-flex align-items-center justify-content-between">
                           <a class="small text-white stretched-link" href="@if(session()->has("updatedCommentOnPost")){{route("admin-post",session()->get("updatedCommentOnPost")->post_id)}} @else # @endif">View Details</a>
                           <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                       </div>
                   </div>
               </div>
                   @component("pages.admin.partials.notification-card",["textBefore" => "You have new message from :","mainContent" =>
                       "newMessage", "session" => true , "textAfter"=>"","route"=> "admin-activities","color"=>"danger"])
                   @endcomponent
                </div>
       </div>
    </main>
@endsection
