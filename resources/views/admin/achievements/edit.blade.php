<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter{{ $Achievement->id }}">  تعديل الانجاز  </button>

<div class="modal fade" id="exampleModalCenter{{ $Achievement->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><div class="mb-30">
          <h6> تعديل </h6>
        <form action="{{ route('achievement.update',$Achievement->id) }}" method="post" enctype="multipart/form-data">
            @csrf
             <input type="hidden" value="{{ $Achievement->id }}">
             <textarea name="title" id="" cols="30" rows="10">{{ $Achievement->title }}</textarea>

             <input type="file" id='image' name="image" type="file">
        </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
        <button type="submit" class="btn btn-success">حفظ</button>
      </div>
    </form>

    </div>
  </div>
</div>
