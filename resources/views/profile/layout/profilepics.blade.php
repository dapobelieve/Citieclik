<!-- Default Modal-->
<form method="post" action="" id="userAvatar" enctype="multipart/form-data" >
  <div class="modal fade" id="modalDefault" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Change Profile Picture</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="user-avatar">
            <img class="profile-img" src="/assets/img/vatar.png" alt="User">
            <img class="profile-img" src="" alt="">
          </div>
          <br> 
          <div class="custom-file">
            <input class="custom-file-input" id="imgField" type="file" id="file-input">
            <span class="custom-file-control"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  {{ csrf_field() }}
</form>
<!--Default modal-->