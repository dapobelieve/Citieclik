<div class="shop-sorting">
                  <label class="sideTexts" for="sorting">Filter by State:</label>
                  <select class="form-control" id="serState">
                    <option value="">All States</option>
                    @foreach($states as $state)
                        <option sname="{{$state->state}}" value="{{$state->id}}">{{$state->state}}</option>
                    @endforeach
                  </select> 
                  <label class="locs" style="display:none" for="sorting">Filter by Location:</label>
                  {{-- <spa --}}
                  <select class="form-control locs" style="display:none" id="location">
                  </select>
                  {{-- </select>
                  <span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span> --}}
                </div>