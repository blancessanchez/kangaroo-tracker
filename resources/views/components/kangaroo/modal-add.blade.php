<!-- Add Kangaroo Modal -->
<div class="modal fade" id="modalAddKangaroo" tabindex="-1" role="dialog" aria-labelledby="modalAddKangarooTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalAddKangarooTitle">Add Kangaroo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form id="formAddKangaroo" novalidate>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" autocomplete="on">
                        <span id="nameError" class="error"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nickname">Nickname</label>
                        <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Enter nickname">
                        <span id="nicknameError" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="weight">Weight</label>
                        <div class="input-group">
                            <input type="number" class="form-control"  name="weight" id="weight" placeholder="Enter weight">
                            <span class="input-group-text">kg</span>
                        </div>
                        <span id="weightError" class="error"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="height">Height</label>
                        <div class="input-group">
                            <input type="number" class="form-control"  name="height" id="height" placeholder="Enter height">
                            <span class="input-group-text">cm</span>
                        </div>
                        <span id="heightError" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">-- Select gender --</option>
                            @foreach (\App\Enums\Gender::cases() as $gender)
                                <option value="{{ $gender->value }}">{{ $gender->text() }}</option>
                            @endforeach
                        </select>
                        <span id="genderError" class="error"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter color">
                        <span id="colorError" class="error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="friendliness">Friendliness</label>
                        <select class="form-control" id="friendliness" name="friendliness">
                            <option value="">-- Select friendliness --</option>
                            @foreach (\App\Enums\Friendliness::cases() as $friendliness)
                                <option value="{{ $friendliness->value }}">{{ $friendliness->text() }}</option>
                            @endforeach
                        </select>
                        <span id="friendlinessError" class="error"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                        <span id="birthdayError" class="error"></span>
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
