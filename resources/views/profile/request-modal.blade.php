<form class="modal fade" method="post" action="{{route('request.add')}}" id="openTicket" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Submit New Request</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p class="text-muted">We normally respond tickets within 2 business days.</p>
            <div class="form-group">
              <label for="ticket-subject">Subject</label>
              <input class="form-control" type="text" name="subject" id="ticket-subject" required>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="ticket-type">Type</label>
                  <select class="form-control" id="ticket-type">
                    <option>Request Category</option>
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->category}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="ticket-priority">Priority</label>
                  <select class="form-control" name="priority" id="ticket-priority">
                    <option>How urgent is your issue?</option>
                    <option>Urgent</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="ticket-description">Description</label>
              <textarea class="form-control" name="desc" id="ticket-description" rows="8" required></textarea>
            </div>
          </div>
          <div class="modal-footer flex-wrap justify-content-between align-items-center">
            {{-- <div class="custom-file">
              <input class="custom-file-input" type="file" id="file-input"><span class="custom-file-control"></span>
            </div> --}}
            <button class="btn btn-primary" type="submit">Submit Ticket</button>
          </div>
        </div>
      </div>

      {{csrf_field()}}
    </form>