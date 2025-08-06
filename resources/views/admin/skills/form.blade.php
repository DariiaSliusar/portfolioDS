<div class="modal ">
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit Skill' : 'Create Skill' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <p>Name</p>
            {!! $errors->first('name', '<p class="alert">:message</p>') !!}
            <input type="text" class="input" name="name" value="{{ isset($skill->name) ? $skill->name : '' }}"/>

            <p>Proficiency</p>
            {!! $errors->first('proficiency', '<p class="alert">:message</p>') !!}
            <input type="text" class="input" name="proficiency" value="{{ isset($skill->proficiency) ? $skill->proficiency : '' }}"/>

            <p>Service</p>
            <select class="inputSelect" name="service_id" id="service_id">
                <option value="" style="display:none">Select Service</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ (isset($skill->service->id)) && $skill->service->id == $service->id ? 'selected' : '' }}>
                        {{ $service->title }}
                    </option>
                @endforeach

            </select>
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
