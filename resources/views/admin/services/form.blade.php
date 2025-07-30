<div class="modal ">
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit Service' : 'Create Service' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Service Name</label>
            {!! $errors->first('title', '<p class="alert">:message</p>') !!}
            <input type="text" name="title" value="{{ isset($service->title) ? $service->title : '' }}"/>

            <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: Font Awesome)</span></label>
            <input type="text" name="icon" value="{{ isset($service->icon) ? $service->icon : '' }}"/>

            <label>Description</label>
            {!! $errors->first('description', '<p class="alert">:message</p>') !!}
            <textarea cols="10" rows="5" name="description">{{ isset($service->description) ? $service->description : '' }}</textarea>
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
