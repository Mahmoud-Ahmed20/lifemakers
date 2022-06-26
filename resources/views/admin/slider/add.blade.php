<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">  اضافة صورة  </button>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><div class="mb-30">
          <h6>اضافة صور</h6>
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="image">صور</label>
                <input type="file" id='image' name="image[]" accept="image/*" multiple type="file">

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
