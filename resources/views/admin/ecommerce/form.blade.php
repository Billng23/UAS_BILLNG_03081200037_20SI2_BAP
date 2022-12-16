<div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="Name" type="text" id="Name" value="{{ isset($ecommerce->Name) ? $ecommerce->Name : ''}}" >
    {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Shop') ? 'has-error' : ''}}">
    <label for="Shop" class="control-label">{{ 'Shop' }}</label>
    <input class="form-control" name="Shop" type="text" id="Shop" value="{{ isset($ecommerce->Shop) ? $ecommerce->Shop : ''}}" >
    {!! $errors->first('Shop', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product') ? 'has-error' : ''}}">
    <label for="product" class="control-label">{{ 'Product' }}</label>
    <input class="form-control" name="product" type="text" id="product" value="{{ isset($ecommerce->product) ? $ecommerce->product : ''}}" >
    {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
