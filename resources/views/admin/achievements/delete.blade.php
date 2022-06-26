<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalCenter2{{ $Achievement->id }}">  حذف انجاز  </button>

<div class="modal fade" id="exampleModalCenter2{{ $Achievement->id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><div class="mb-30">
          <h6>حذف انجاز</h6>
        <form action="{{ route('achievement.delete',$Achievement->id) }}" method="post" enctype="multipart/form-data">
            @csrf
             <p class="text-danger">
                هل انت متأكد من عملية الحذف
             </p>
             <input type="hidden" value="{{ $Achievement->id }}">
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
