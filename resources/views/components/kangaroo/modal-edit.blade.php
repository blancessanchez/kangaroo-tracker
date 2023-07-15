<!-- Edit Kangaroo Modal -->
<div class="modal fade" id="modalEditKangaroo" tabindex="-1" role="dialog" aria-labelledby="modalEditKangarooTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditKangarooTitle">Edit Kangaroo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEditKangaroo" novalidate>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nameEdit">Name</label>
                            <input type="hidden" name="recordId" id="recordId">
                            <input type="text" class="form-control" name="name" id="nameEdit" placeholder="Enter name" autocomplete="on">
                            <span id="nameEditError" class="error"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nicknameEdit">Nickname</label>
                            <input type="text" class="form-control" name="nickname" id="nicknameEdit" placeholder="Enter nickname">
                            <span id="nicknameEditError" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="weightEdit">Weight</label>
                            <div class="input-group">
                                <input type="number" class="form-control"  name="weight" id="weightEdit" placeholder="Enter weight">
                                <span class="input-group-text">kg</span>
                            </div>
                            <span id="weightEditError" class="error"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="heightEdit">Height</label>
                            <div class="input-group">
                                <input type="number" class="form-control"  name="height" id="heightEdit" placeholder="Enter height">
                                <span class="input-group-text">cm</span>
                            </div>
                            <span id="heightEditError" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="genderEdit">Gender</label>
                            <select class="form-control" id="genderEdit" name="gender">
                                <option value="">-- Select gender --</option>
                                @foreach (\App\Enums\Gender::cases() as $gender)
                                    <option value="{{ $gender->value }}">{{ $gender->text() }}</option>
                                @endforeach
                            </select>
                            <span id="genderEditError" class="error"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="colorEdit">Color</label>
                            <input type="text" class="form-control" id="colorEdit" name="colorEdit" placeholder="Enter color">
                            <span id="colorEditError" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="friendlinessEdit">Friendliness</label>
                            <select class="form-control" id="friendlinessEdit" name="friendliness">
                                <option value="">-- Select friendliness --</option>
                                @foreach (\App\Enums\Friendliness::cases() as $friendliness)
                                    <option value="{{ $friendliness->value }}">{{ $friendliness->text() }}</option>
                                @endforeach
                            </select>
                            <span id="friendlinessEditError" class="error"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="birthdayEdit">Birthday</label>
                            <input type="date" class="form-control" id="birthdayEdit" name="birthday">
                            <span id="birthdayEditError" class="error"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
