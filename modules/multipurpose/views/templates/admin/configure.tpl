<form method="POST">
    <div class="panel">
        <div class="panel-heading">
            {l s='Configuration' mod='multipurpose'}
        </div>
        <div class="panel-body">
            <label for="print">{l s='What to print?' mod='Multipurpose'}</label>
            <textarea type="text" name="print" id="print" class="form-control">{$MULTIPURPOSE_STR}</textarea>
        </div>
        <div class="panel-footer">
            <button type="submit" name="savemultipurposestring" class="btn btn-default pull-right">
                {l s='Save' mod='Multipurpose'}
            </button>
        </div>
    </div>
</form>