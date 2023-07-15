<!-- Edit Kangaroo Modal -->
<div class="modal fade" id="modalEditKangaroo" tabindex="-5" role="dialog" aria-labelledby="modalEditKangarooTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalEditKangarooTitle">Edit Kangaroo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formEditKangaroo">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="editName">Name</label>
                        <input type="hidden" name="recordId" id="recordId">
                        <input type="text" class="form-control" name="editName" id="editName" placeholder="Enter name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="editNickname">Nickname</label>
                        <input type="text" class="form-control" name="editNickname" id="editNickname" placeholder="Enter nickname">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="editWeight">Weight</label>
                        <input type="number" class="form-control" name="editWeight" id="editWeight" placeholder="Enter weight">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="editHeight">Height</label>
                        <input type="number" class="form-control" name="editHeight" id="editHeight" placeholder="Enter height">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="editGender">Gender</label>
                        <select class="form-control" id="editGender" name="editGender">
                            <option value="">Choose...</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="editColor">Color</label>
                        <input type="text" class="form-control" id="editColor" name="editColor" placeholder="Enter color">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="editFriendliness">Friendliness</label>
                        <select class="form-control" id="editFriendliness" name="editFriendliness">
                            <option value="">Choose...</option>
                            <option value="1">Friendly</option>
                            <option value="2">Independent</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="editBirthday">Birthday</label>
                        <input type="date" class="form-control" id="editBirthday" name="editBirthday">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
  </div>
</div>