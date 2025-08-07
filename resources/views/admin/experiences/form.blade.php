<div class="modal" >
    <div class="modal-content">
        <h2>{!! $formMode === 'edit' ? 'Edit Experience' : 'Create Experience' !!}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <p>Company</p>
            {!! $errors->first('company', '<p class="alert">:message</p>') !!}
            <input type="text" name="company" value="{{ isset($experience->company) ? $experience->company : '' }}"/>

            <p>Period</p>
            {!! $errors->first('period', '<p class="alert">:message</p>') !!}
            <input type="text" name="period" value="{{ isset($experience->period) ? $experience->period : '' }}"/>

            <p>Position</p>
            {!! $errors->first('position', '<p class="alert">:message</p>') !!}
            <input type="text" name="position" value="{{ isset($experience->position) ? $experience->position : '' }}"/>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="close-modal">Cancel</button>
            <button class="secondary close-modal">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                {!! $formMode === 'edit' ? 'Update' : 'Save' !!}
            </button>
        </div>
    </div>
</div>
