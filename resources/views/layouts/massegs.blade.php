
   @if (session()->has('add'))
   <div class="alert alert-success alert-dismissible">
       {{session()->get('add')}}
   </div>
 @endif

   @if (session()->has('update'))
   <div class="alert alert-success alert-dismissible">
       {{session()->get('update')}}
   </div>
 @endif

   @if (session()->has('delete'))
   <div class="alert alert-success alert-dismissible">
       {{session()->get('delete')}}
   </div>
 @endif
