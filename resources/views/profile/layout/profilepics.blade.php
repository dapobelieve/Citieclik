<!-- Default Modal-->
<form method="post" action="{{ route('profile-pic') }}" id="userAvatar" enctype="multipart/form-data" >
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
            <img class="profile-img userImg"  src="{{ $user->getUserImg() }}" alt="User">
          </div>
          <br> 
          <div class="custom-file">
            <input class="custom-file-input" name="imgField" id="imgField" type="file">
            <span class="custom-file-control"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary btn-sm" id="saveChange" type="submit">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
</form>
<!--Default modal-->