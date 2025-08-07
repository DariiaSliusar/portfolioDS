<div class="modal" >
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit Education' : 'Create Education' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Institution</label>
            {!! $errors->first('institution', '<p class="alert">:message</p>') !!}
            <input type="text" name="institution" value="{{ isset($education->institution) ? $education->institution : '' }}"/>

            <label>Period</label>
            {!! $errors->first('period', '<p class="alert">:message</p>') !!}
            <input type="text" name="period" value="{{ isset($education->period) ? $education->period : '' }}"/>

            <label>Degree</label>
            <input type="text" name="degree" value="{{ isset($education->degree) ? $education->degree : '' }}"/>

            <label>Department</label>
            <input type="text" name="department" value="{{ isset($education->department) ? $education->department : '' }}"/>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="close-modal">
                Cancel
            </button>
            <button class="secondary close-modal">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                {{ $formMode === 'edit' ? 'Update' : 'Save' }}
            </button>
        </div>
    </div>
</div>
