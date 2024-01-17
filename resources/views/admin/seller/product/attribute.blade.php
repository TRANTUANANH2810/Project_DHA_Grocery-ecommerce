@if (!empty($data))
<div id="fetchDataAttributeResult">
    @foreach ($data as $key => $item)
    <div class="form-group">
        <label>{{ $item->name }}</label>
        <a href="javascript:void(0)" class="refresh_sku float-right" title="Làm mới"><i class="fas fa-redo-alt"></i></a>
        <input type="text" class="form-control" name="attribute_value[]" id="attribute_value" value="{{ $item->values ? $item->values : '' }}">
        <input type="hidden" class="form-control" name="attribute_id[]" id="attribute_id" value="{{ $item->id ? $item->id : '' }}">
        @if ($errors->has('attribute_value'))
        <span class="fr-error d-block mt-2" style="color: red"><i class="fas fa-exclamation-circle"></i> {{$errors->first('attribute_value')}}</span>    
        @endif
    </div>
    @endforeach
</div>
@endif